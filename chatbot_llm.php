<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST");


/* ===========================================
   GEMINI CONFIGURATION
=========================================== */

$GEMINI_API_KEY = "AIzaSyCv9mA1PtpeQu2-IRloFBXDwy2l2-YPsRs";

$API_URL = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=" . $GEMINI_API_KEY;


/* ===========================================
   RECEIVE CHAT MESSAGE
=========================================== */

$data = json_decode(file_get_contents("php://input"), true);

$userMessage = trim($data["message"] ?? "");

$history = $data["history"] ?? [];

if ($userMessage == "") {
    echo json_encode([
        "success" => false,
        "reply" => "Please enter a message."
    ]);
    exit;
}


/* ===========================================
   HOSPITAL KNOWLEDGE & DOCTOR LIST
=========================================== */

$systemPrompt = <<<PROMPT

You are the official AI Assistant of P. D. Hinduja Sindhi Hospital, Bengaluru.

Your job is to help patients with:
• Departments
• Doctors & Specialties
• Medical Services
• Symptoms & Recommendations
• Appointments
• Emergency
• Timings & Facilities

Instructions:

1. Always answer politely and professionally as a hospital receptionist.
2. Never prescribe medicines or diagnose diseases.
3. If a patient mentions symptoms, identify the most suitable department based on the Symptom Mapping provided.
4. Explain briefly why that department is suitable.
5. ALWAYS list the specific doctors available in that department along with their specializations/designations from the provided Doctor List.
6. If the user directly asks for doctor details or recommendations, share the relevant doctor names and their specialties clearly using bullet points.
7. Recommend booking an appointment.
8. Never invent doctors, specialties, or services not listed in the Hospital Data.
9. If a requested service is not provided by the hospital, politely say so.
PROMPT;

require_once 'config/db.php';

// Fetch Hospital Info
$hospitalKnowledge = [];
try {
    $stmt = $pdo->query("SELECT * FROM cb_hospital_info LIMIT 1");
    if ($info = $stmt->fetch()) {
        $hospitalKnowledge = [
            "hospital" => [
                "name" => "P. D. Hinduja Sindhi Hospital",
                "city" => "Bengaluru",
                "address" => $info['address'],
                "email" => $info['email'],
                "emergency" => $info['emergency_phone'],
                "appointment" => $info['normal_phone']
            ]
        ];
    }
} catch (Exception $e) {
    // Fallback if DB error
}

if (empty($hospitalKnowledge)) {
    $hospitalKnowledge = [
        "hospital" => [
            "name" => "P. D. Hinduja Sindhi Hospital",
            "city" => "Bengaluru",
            "emergency" => "24/7 Emergency Care Available",
            "appointment" => "Appointments can be booked online or at the reception."
        ]
    ];
}

$systemPrompt .= "\n\nHospital Knowledge:\n";
$systemPrompt .= json_encode($hospitalKnowledge, JSON_PRETTY_PRINT);

// Fetch Doctors by Service
$doctorsList = [];
try {
    $stmt = $pdo->query("SELECT d.name, d.designation as spec, s.name as service_name FROM cb_doctors d JOIN cb_services s ON d.service_id = s.id");
    while ($row = $stmt->fetch()) {
        $service = $row['service_name'];
        if (!isset($doctorsList[$service])) {
            $doctorsList[$service] = [];
        }
        $doctorsList[$service][] = ["name" => $row['name'], "spec" => $row['spec']];
    }
} catch (Exception $e) {
    // Fallback if DB error
}

$systemPrompt .= "\n\nHospital Doctors List by Department:\n";
$systemPrompt .= json_encode($doctorsList, JSON_PRETTY_PRINT);

/* ===========================================
   SYMPTOM → DEPARTMENT MAP
=========================================== */

$symptomDepartmentMap = [];
try {
    $stmt = $pdo->query("SELECT sm.symptom, s.name as service_name FROM cb_symptom_mapping sm JOIN cb_services s ON sm.service_id = s.id");
    while ($row = $stmt->fetch()) {
        $symptomDepartmentMap[$row['symptom']] = $row['service_name'];
    }
} catch (Exception $e) {
    // Fallback if DB error
}

$systemPrompt .= "\n\nSymptom Mapping:\n";
$systemPrompt .= json_encode($symptomDepartmentMap, JSON_PRETTY_PRINT);


/* ===========================================
   BUILD GEMINI CONVERSATION
=========================================== */

$contents = [];

/* System Prompt */
$contents[] = [
    "role" => "user",
    "parts" => [["text" => $systemPrompt]]
];

$contents[] = [
    "role" => "model",
    "parts" => [["text" => "Understood. I am ready to act as the official Hinduja Hospital AI Assistant with full doctor and department knowledge."]]
];


/* ===========================================
   CHAT HISTORY
=========================================== */

foreach ($history as $chat) {
    if (empty($chat["role"]) || empty($chat["text"]))
        continue;

    $contents[] = [
        "role" => $chat["role"],
        "parts" => [["text" => $chat["text"]]]
    ];
}


/* ===========================================
   CURRENT USER MESSAGE
=========================================== */

$contents[] = [
    "role" => "user",
    "parts" => [["text" => $userMessage]]
];


/* ===========================================
   GEMINI REQUEST BODY
=========================================== */

$requestBody = [
    "contents" => $contents,
    "generationConfig" => [
        "temperature" => 0.3,
        "topK" => 40,
        "topP" => 0.9,
        "maxOutputTokens" => 600
    ]
];

$ch = curl_init($API_URL);

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
    CURLOPT_POSTFIELDS => json_encode($requestBody)
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo json_encode([
        "success" => false,
        "reply" => "Network error occurred."
    ]);
    curl_close($ch);
    exit;
}

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$result = json_decode($response, true);

if ($httpCode != 200) {
    echo json_encode([
        "success" => false,
        "reply" => "Sorry, I am unable to fetch doctor details right now. Please try again later."
    ]);
    exit;
}

$reply = "Sorry, I couldn't understand.";

if (isset($result["candidates"][0]["content"]["parts"][0]["text"])) {
    $reply = $result["candidates"][0]["content"]["parts"][0]["text"];
}

echo json_encode([
    "success" => true,
    "reply" => $reply
]);
exit;
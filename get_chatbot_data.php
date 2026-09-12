<?php
header('Content-Type: application/json');
require_once 'config/db.php';

$data = [
    "departments" => [],
    "procedures" => [
        "cardiology" => ["ECG", "2D Echo", "TMT", "Angiography", "Angioplasty"],
        "orthopaedics" => ["Knee Replacement", "Hip Replacement", "ACL Reconstruction", "Arthroscopy", "Fracture Treatment"],
        "neurology" => ["Stroke Treatment", "Brain Surgery", "Epilepsy Treatment", "Spine Surgery"],
        "nephrology" => ["Dialysis", "Kidney Biopsy", "Kidney Disease Treatment"],
        "pulmonology" => ["Asthma Treatment", "COPD Treatment", "Bronchoscopy"],
        "general-surgery" => ["Appendix Surgery", "Hernia Surgery", "Gallbladder Surgery"],
        "urology" => ["Kidney Stone Treatment", "Laser Stone Surgery", "Prostate Surgery"],
        "gynaecology" => ["Pregnancy Care", "Normal Delivery", "C-Section", "Fibroid Surgery"],
        "gastroenterology" => ["Endoscopy", "Colonoscopy", "Liver Treatment"]
    ],
    "doctors" => [],
    "all_doctors" => []
];

// Fetch Departments
try {
    $stmt = $pdo->query("SELECT id, name FROM cb_services");
    while ($row = $stmt->fetch()) {
        $deptId = strtolower(str_replace([' ', '&', ','], ['-', 'and', ''], $row['name']));
        $data["departments"][] = [
            "id" => $deptId,
            "label" => $row['name']
        ];
    }
} catch (Exception $e) {}

// Fetch Doctors mapped by department ID and for all_doctors
try {
    $stmt = $pdo->query("SELECT d.name, d.designation as spec, s.name as service_name FROM cb_doctors d JOIN cb_services s ON d.service_id = s.id");
    while ($row = $stmt->fetch()) {
        $deptId = strtolower(str_replace([' ', '&', ','], ['-', 'and', ''], $row['service_name']));
        
        if (!isset($data["doctors"][$deptId])) {
            $data["doctors"][$deptId] = [];
        }
        
        $data["doctors"][$deptId][] = [
            "name" => $row['name'],
            "spec" => $row['spec'],
            "exp" => "10+ Years" // Default as it's not in DB
        ];
        
        $data["all_doctors"][] = [
            "name" => $row['name'],
            "spec" => $row['service_name']
        ];
    }
} catch (Exception $e) {}

echo json_encode($data, JSON_PRETTY_PRINT);
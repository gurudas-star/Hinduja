<?php
/**
 * track_view.php
 * Include this at the top of any front-end page (after config/db.php).
 * Increments the `views` column in page_seo once per session per page.
 * If the page doesn't exist in page_seo, it inserts a new row automatically.
 */

if (!isset($pdo)) return; // safety – no DB, skip

// Start session if not started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Map actual PHP filenames → page_name label
$page_name_map = [
    // Root pages
    'index.php'                   => 'Home',
    'about.php'                   => 'About',
    'blog.php'                    => 'Blog',
    'contact.php'                 => 'Contact Us',
    'doctors.php'                 => 'Doctors',
    'services.php'                => 'service',
    'specialties.php'             => 'Department',
    'news.php'                    => 'news',
    'appointment.php'              => 'appointment',
    'cardiology.php'              =>'cardiology',
    'ct-scan.php'                =>'ct-scan',
    'dental-surgery.php'         =>'dental-surgery',
    'dr-anil-kumar.php'            =>'dr-anil-kumar',
    'dr-anita-dias.php'          =>'dr-anita-dias',
    'dr-manohar-cv.php'         =>'dr-manohar-cv',
    'dr-N-praveenkumar.php'     =>'dr-N-praveenkumar',
    'dr-Prakash-babu-MN.php'     =>'dr-Prakash-babu-MN',
    'dr-Preetham-raj.php'       =>'dr-Preetham-raj',
    'dr-sampath-kumar-m-n.php'       =>'dr-sampath-kumar-m-n',
    'dr-uday-kumar-SB.php'       =>'dr-uday-kumar-SB',
    'echocardiography.php'                  =>'echo',
    'emergency-ambulance-services.php'   =>'emergency-ambulance-services',
    'emergency-room.php'   =>'emergency-room',
    'emergency-services.php' =>'emergency-services',
    'ent.php'     => 'ent',
    'family-medicine.php'     => 'family-medicine',
    'faqs.php'  => 'faqs',
    'general-pediatrics.php' => 'general-pediatrics',
    'general-surgery.php' => 'general-surgery',
    'intensive-care-unit.php' => 'intensive-care-unit',
    'internal-medicine.php' => 'internal-medicine',
    'laboratory-services.php' => 'laboratory-services',
    'level-3-icu.php' => 'level-3-icu',
    'medical-gastroenterology.php' => 'medical-gastroenterology',
    'medical-oncology-hematology.php' => 'medical-oncology-hematology',
    'nephrology.php'  => 'nephrology.php',
    'neuro-surgery.php' => 'neuro-surgery',
    'obstetrics-gynaecology.php' => 'obstetrics-gynaecology',
    'oncology-services.php' => 'oncology-services',
    'orthopaedics.php' => 'orthopaedics',
    'pharmacy.php' => 'pharmacy',
    'physiotherapy.php' => 'physiotherapy',
    'plastic-surgery.php' => 'plastic-surgery',
    'pricing.php' => 'pricing',
    'pulmonology.php' => 'pulmonology',
    'team-details.php' => 'team-details',
    'ultrasound.php' => 'ultrasound',
    'urology.php' => 'urology',
    'x-ray.php' => 'x-ray',
    'doppler.php' => 'doppler'

];

$current_file = basename($_SERVER['PHP_SELF']);
$page_name    = $page_name_map[$current_file] ?? null;

if (!$page_name) return; // page not in map, skip

// Track once per session per page to avoid refresh inflation
$session_key = 'viewed_' . md5($page_name);
if (!empty($_SESSION[$session_key])) return;

try {
    // Ensure views column exists
    $pdo->exec("ALTER TABLE page_seo ADD COLUMN IF NOT EXISTS views INT NOT NULL DEFAULT 0");
} catch (Exception $e) { /* ignore */ }

try {
    // Try to increment existing row
    $stmt = $pdo->prepare("UPDATE page_seo SET views = views + 1 WHERE page_name = ?");
    $stmt->execute([$page_name]);

    // If no row was updated, insert a new one
    if ($stmt->rowCount() === 0) {
        $ins = $pdo->prepare("INSERT INTO page_seo (page_name, views) VALUES (?, 1)");
        $ins->execute([$page_name]);
    }

    $_SESSION[$session_key] = true;
} catch (Exception $e) { /* silently fail */ }
?>

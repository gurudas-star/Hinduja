<?php
/**
 * Dynamic SEO Tags Component
 * Fetches SEO data from the database based on the current page filename.
 */

// Determine current page for SEO
$current_file = basename($_SERVER['PHP_SELF']);
$page_map = [
    'index.php' => 'Home',
    'about.php' => 'About',
    'blog.php' => 'Blog',
    'contact.php' => 'Contact',
    'doctors.php' => 'Doctors',
    'services.php' => 'services',
    'specialties.php' => 'Department',
    'news.php'        => 'news',
    'appointment.php'              => 'appointment',
    'cardiology.php'              =>'cardiology',
    'ct-scan.php'           =>'ct-scan',
    'dental-surgery.php'  => 'dental-surgery',
    'dr-anil-kumar.php'            =>'dr-anil-kumar',
    'dr-anita-dias.php'          =>'dr-anita-dias',
    'dr-manohar-cv.php'         =>'dr-manohar-cv',
    'dr-N-praveenkumar.php'     =>'dr-N-praveenkumar',
    'dr-Prakash-babu-MN.php'     =>'dr-Prakash-babu-MN',
    'dr-Preetham-raj.php'       =>'dr-Preetham-raj',
    'dr-sampath-kumar-m-n.php'       =>'dr-sampath-kumar-m-n',
    'dr-uday-kumar-SB.php'       =>'dr-uday-kumar-SB',
    'echocardiography.php'                  =>'echo',
    'emergency-ambulance-services.php'  => 'emergency-ambulance-services',
    'emergency-room.php'   =>'emergency-room',
    'emergency-services.php' =>'emergency-services',
    'ent.php'  =>'ent',
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
    'ultrasound.php'=> 'ultrasound',
    'urology.php' => 'urology',
    'x-ray.php' => 'x-ray',
    'doppler.php' => 'doppler'
];

// Add sub-pages if they exist in the map
$page_key = $page_map[$current_file] ?? '';

// Fallback for subdirectories like General-surgery/
if (empty($page_key)) {
    // Check if the filename without extension matches any keyword
    $filename = pathinfo($current_file, PATHINFO_FILENAME);
    if (strpos($filename, 'varicose-veins') !== false) $page_key = 'General Surgery'; // Or a specific entry
}

if ($page_key && isset($pdo)) {
    $stmt = $pdo->prepare("SELECT * FROM page_seo WHERE page_name = ?");
    $stmt->execute([$page_key]);
    $db_seo = $stmt->fetch();
    
    if ($db_seo) {
        $page_title = !empty($db_seo['page_title']) ? $db_seo['page_title'] : (!empty($db_seo['meta_title']) ? $db_seo['meta_title'] : null);
        $meta_description = !empty($db_seo['meta_description']) ? $db_seo['meta_description'] : null;
        $meta_keywords = !empty($db_seo['meta_keywords']) ? $db_seo['meta_keywords'] : null;
        $canonical_tag = !empty($db_seo['canonical_tag']) ? $db_seo['canonical_tag'] : null;
        $meta_title = !empty($db_seo['meta_title']) ? $db_seo['meta_title'] : null;

        if ($page_key === 'Home' && !empty($db_seo['analytics_code'])) {
            $analytics_id = $db_seo['analytics_code'];
        }
    }
}
?>

<title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Travel Bee - Personalised Healthcare'; ?></title>
<?php if (!empty($meta_title)): ?>
   <meta name="title" content="<?php echo htmlspecialchars($meta_title); ?>">
<?php endif; ?>
<?php if (!empty($meta_description)): ?>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
<?php endif; ?>

<?php if (!empty($meta_keywords)): ?>
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
<?php endif; ?>
<?php if (!empty($canonical_tag)): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_tag); ?>">
<?php endif; ?>
<?php if (!empty($analytics_id)): ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($analytics_id); ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '<?php echo htmlspecialchars($analytics_id); ?>');
    </script>
<?php endif; ?>

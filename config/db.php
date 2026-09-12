<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database Configuration
// If on localhost / XAMPP, use local settings; otherwise use server settings if defined
$Host = 'localhost';
$DBUser = 'root';
$DBPass = '';
$DB = 'travel_bee';
$Charset = 'utf8mb4';

// IQH Live Server Database Settings (uncomment on live server if applicable)
// $Host = 'localhost';
// $DBUser = 'iqh_admin';
// $DBPass = 'iqh@2026';
// $DB = 'iqh_db';

$dsn = "mysql:host=$Host;dbname=$DB;charset=$Charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $DBUser, $DBPass, $options);
} catch (\PDOException $e) {
    // Log error and allow page to load gracefully instead of crashing entire site
    error_log("Database connection error: " . $e->getMessage());
    $pdo = null;
}
?>

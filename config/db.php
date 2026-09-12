<?php

session_start();
// Database Variables
$Host = 'localhost';
$DBUser = 'root';
$DBPass = '';
$DB = 'travel_bee';
$Charset = 'utf8mb4';

// $Host = '103.1.112.109';
// $DBUser = 'iqh_admin';
// $DBPass = 'iqh@2026';
// $DB = 'iqh_db';
// $Charset = 'utf8mb4';

//
// $Host = '103.1.112.109';
// $DBUser = 'iqh_anytime';
// $DBPass = 'anytime@123';
// $DB = 'anytime_db';
// $Charset = 'utf8mb4';

$dsn = "mysql:host=$Host;dbname=$DB;charset=$Charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $DBUser, $DBPass, $options);
}
catch (\PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

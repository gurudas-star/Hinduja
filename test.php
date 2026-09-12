<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>PHP is working on GoDaddy!</h1>";
echo "<p>PHP Version: " . phpversion() . "</p>";

// Test Database Connection
echo "<h3>Testing Database Connection:</h3>";
require_once 'config/db.php';

if (isset($pdo) && $pdo !== null) {
    echo "<p style='color:green;font-weight:bold;'>Database connected successfully!</p>";
} else {
    echo "<p style='color:red;font-weight:bold;'>Database connection failed or not configured yet in config/db.php.</p>";
}
?>

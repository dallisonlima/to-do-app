<?php

$hostname = 'localhost';
$database = 'to_do_list'; 
$username = 'postgres';    
$password = 'admin';

try {
    $pdo = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

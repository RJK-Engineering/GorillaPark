<?php

$server = "10.11.15.121";
// $server = "localhost";
$db = "gorillapark";
$user = "gorillapark";
$pwd = "krapallirog";

try {
    $connection = new PDO("mysql:host=$server;dbname=$db", $user, $pwd);
    // PDO can throw exceptions rather than Fatal errors, so let's change the error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection successful";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



?>

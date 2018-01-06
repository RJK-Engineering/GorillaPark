<?php

function connect_to_db() {
    $dbserver = "10.11.15.121";
    // $dbserver = "localhost";
    $dbname = "gorillapark";
    $dbuser = "gorillapark";
    $dbpass = "krapallirog";

    try {
        $db = new PDO("mysql:host=$dbserver;dbname=$dbname", $dbuser, $dbpass);
        // PDO can throw exceptions rather than Fatal errors, so let's change the error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        exit;
    }
    return $db;
}

function authenticate() {
    session_start();
    if (!isset($_SESSION['username'])) {
        redirect('index.php?login_failed=1');
    }
}

function redirect($page) {
    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        $uri = 'https://';
    } else {
        $uri = 'http://';
    }
    $uri .= $_SERVER['HTTP_HOST'];
    header("Location: $uri/$page");
    exit;
}

?>

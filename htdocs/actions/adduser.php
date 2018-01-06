<?php

require_once('../functions.php');

authenticate();

$user = $_GET['username'];
$pass = $_GET['password'];
$role = $_GET['role'];

if (!isset($user) || !isset($pass) || !isset($role)) {
    echo "Something went wrong";
    exit;
}

$db = connect_to_db();

try {
    $sql = "insert into user (name, password, role) values(:name, :pw, :role)";
    $statement = $db->prepare($sql);
    $statement->execute(array(
        ':name' => $user,
        ':pw' => $pass,
        ':role' => $role
    ));
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
    exit;
}

redirect("admin.html");

?>

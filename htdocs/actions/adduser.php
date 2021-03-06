<?php

require_once('../functions.php');
authenticate(array("admin"));

$user = $_POST['username'];
$pass = $_POST['password'];
$role = $_POST['role'];

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

redirect("admin.php");

?>

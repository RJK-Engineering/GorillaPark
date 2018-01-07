<?php

require_once('../functions.php');

$user = $_POST['username'];
$pass = $_POST['password'];

if (!isset($user)) {
    $user = $_GET['username'];
    $pass = $_GET['password'];
}

if (!isset($user) || !isset($pass)) {
    redirect('index.php?login_failed=1');
}

$db = connect_to_db();

try {
    // query database
    $sql = "select name, role, checkedin from user where name=:name and password=:pw";
    $statement = $db->prepare($sql);
    $statement->execute(array(
        ':name' => $user,
        ':pw' => $pass
    ));
    $row = $statement->fetch();
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
    exit;
}

if (!$row) {
    // redirect('index.php?login_failed=1');
}

ob_start();
session_start();

$_SESSION['username'] = $row['name'];
$_SESSION['userrole'] = $row['role'];
$_SESSION['usercheckedin'] = $row['checkedin'];

redirect("home.php");

?>

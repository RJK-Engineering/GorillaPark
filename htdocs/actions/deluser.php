<?php

require_once('../functions.php');
authenticate(array("admin"));

$user = $_POST['username'];

if (!isset($user)) {
    echo "Something went wrong";
    exit;
}

$db = connect_to_db();

try {
    $sql = "delete from user where name=:name";
    $statement = $db->prepare($sql);
    $statement->execute(array(
        ':name' => $user
    ));
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
    exit;
}

redirect("admin.php");

?>

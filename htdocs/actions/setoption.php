<?php

require_once('../functions.php');
authenticate(array("admin"));

$option = $_POST['option'];
$value = $_POST['value'];

if (!isset($option) || !isset($value)) {
    echo "Something went wrong";
    exit;
}

$db = connect_to_db();

try {
    $sql = "insert into configuration (option, value) values(:option, :value)"
        . " on duplicate key update value=:value";
    $statement = $db->prepare($sql);
    $statement->execute(array(
        ':option' => $option,
        ':value' => $value
    ));
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
    exit;
}

redirect("admin.php");

?>

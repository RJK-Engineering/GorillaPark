<?php

require_once('../functions.php');
authenticate(array("user", "admin", "service"));

$db = connect_to_db();

try {
    $sql = "update user set checkedin=1 where name=:name";
    $statement = $db->prepare($sql);
    $statement->execute(array(
        ':name' => $_SESSION['username']
    ));
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
    exit;
}
$_SESSION['usercheckedin'] = 1;

openBarrier();

redirect("home.php");

?>

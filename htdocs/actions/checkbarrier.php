<?php

require_once('../functions.php');

$db = connect_to_db();

try {
    $sql = "select value from configuration where option='open_barrier'";
    $statement = $db->prepare($sql);
    $statement->execute();
    $row = $statement->fetch();
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
    exit;
}

if ($row && $row['value']) {
    echo 1;
    try {
        $sql = "update configuration set value=0 where option='open_barrier'";
        $statement = $db->prepare($sql);
        $statement->execute();
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        exit;
    }
} else {
    echo 0;
}

?>

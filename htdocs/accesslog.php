<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GorillaPark toegangslog</title>
    <link rel="stylesheet" href="style/main.css">
</head>

<body>
<?php

require_once('functions.php');

authenticate();

$start = $_GET['startdate'];
$end = $_GET['enddate'];

if (!isset($start) || !isset($end)) {
    echo "Something went wrong";
    exit;
}

$db = connect_to_db();

try {
    $sql = "select username, action, date from accesslog where date>=:start and date<=:end";
    $statement = $db->prepare($sql);
    $statement->execute(array(
        ':start' => $start,
        ':end' => $end
    ));
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
    exit;
}

echo '<table>'. PHP_EOL;
foreach ($statement as $row) {
    echo sprintf(
        '<tr><td>%s</td><td>%s</td><td>%s</td></tr>',
        $row->contact_name,
        $row->contact_email,
        $row->contact_modified
    ) . PHP_EOL;
}
echo '</table>'. PHP_EOL;

?>

    
</body>
</html>

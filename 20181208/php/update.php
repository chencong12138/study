<?php
$link = mysqli_connect("127.0.0.1", "root", "", "chencong");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}



$sql3 = <<<SQL3
update todo_list set todo=? where id=?;
SQL3;
$stmt = $link->prepare($sql3);
$stmt->bind_param("si", $_GET['todo'], $_GET['id']);
$stmt->execute();

if ($stmt->error) {
    echo "FAILURE!!! " . $stmt->error;
}
else echo "Updated {$stmt->affected_rows} rows";


mysqli_close($link);
?>
<?php
$link = mysqli_connect("127.0.0.1", "root", "", "chencong");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// echo " information: " . mysqli_get_host_info($link) . PHP_EOL;

$sql5 = <<<SQL5
delete from todo_list where id=?;
SQL5;
$stmt = $link->prepare($sql5);
$stmt->bind_param("i", $_GET['id']);

$stmt->execute();


mysqli_close($link);
?>
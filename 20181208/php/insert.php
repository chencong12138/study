<?php
$link = mysqli_connect("127.0.0.1", "root", "", "chencong");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}




/**
 * 开始
 */


 $sql2 = <<<SQL2
insert into todo_list(todo) value(?);
SQL2;
$stmt = $link->prepare($sql2);
$stmt->bind_param("s", $_GET['todo']);
$stmt->execute(); 

echo json_encode([
    'id'=>$link->insert_id,
]);

mysqli_close($link);
?>
<?php
$link = mysqli_connect("127.0.0.1", "root", "", "chencong");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// echo " information: " . mysqli_get_host_info($link) . PHP_EOL;

/**
 * 开始
 */

// $sql1 = <<<SQL1
// create table person(
//     id INT NOT NULL AUTO_INCREMENT,
//     name VARCHAR(32),
//     age INT,
//     sex TINYINT,
//     PRIMARY KEY ( id )
//  );
// SQL1;
//  $link->query($sql1);


// $sql2 = <<<SQL2
// insert into person(name,age,sex) value('mike',18,1);
// SQL2;
// $stmt = $link->prepare($sql2);
// $stmt->execute();

// $sql3 = <<<SQL3
// update person set name='lucy' where(id=1);
// SQL3;
// $stmt = $link->prepare($sql3);
// $stmt->execute();

$sql4 = <<<SQL4
select * from todo_list;
SQL4;
$result = $link->query($sql4);
$group_arr = [];
if($result){
    // Cycle through results
   while ($row = $result->fetch_object()){
       $group_arr[] = $row;
   }
    // Free result set
    $result->close();
}
echo json_encode($group_arr);
// $sql5 = <<<SQL5
// delete from person where(id=1);
// SQL5;
// $stmt = $link->prepare($sql5);
// $stmt->execute();

// $sql1 = <<<SQL1
// create table todoList(
//     id INT NOT NULL AUTO_INCREMENT,
//     todo VARCHAR(100),
//     PRIMARY KEY ( id )
// );
// SQL1;
// $link->query($sql1);

mysqli_close($link);
?>
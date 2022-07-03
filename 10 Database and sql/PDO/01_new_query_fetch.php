<?php
//connect to mysql with PHP PDO

// $db_name = "mysql:host=localhost;dbname=testing";
// $username = "root";
// $password = "";

// $conn = new PDO($db_name, $username, $password);

//________________________________________________________

// query() method in PHP PDO

// $sql = $conn->query("SELECT * FROM students");

//________________________________________________________

// fetch() method in PHP PDO

// while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
//     echo "{$row['id']} - {$row['student_name']} - {$row['city']} - {$row['dob']} <br>";
// }

// while ($row1 = $sql->fetch(PDO::FETCH_NUM)) {
//     echo "{$row1[0]} - {$row1[1]} - {$row1[2]} - {$row1[3]} <br>";
// }

// while ($row2 = $sql->fetch(PDO::FETCH_OBJ)) {
//     echo "{$row2->id} - {$row2->student_name} - {$row2->city} - {$row2->dob} <br>";
// }


//_____________________________________________________

// fetchAll() method in PHP PDO

// $result = $sql->fetchAll(PDO::FETCH_ASSOC);

// if(count($result) > 0){
// 	foreach($result as $row){
// 		echo "{$row['student_name']} - {$row['city']} <br>" ;
// 	}
// }else{
// 	echo "No Record Found";
// }
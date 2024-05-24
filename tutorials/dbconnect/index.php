<?php

$server = "localhost";
$userName = "root";
$password = '';
$dbname = 'test';


$conn = new mysqli($server, $userName, $password, $dbname);

    if($conn->connect_errno > 0){
        echo 'Something went wrong, connection Failed!';
    }
// echo "<pre>";
// print_r($conn->connect_errno);
// echo "</pre>";

// $sql = 'INSERT INTO students (name, email, phone, image_path) VALUES ("Azad Kumar", "azad@gmail.com", "89789564675", "iasdkjl")';

// if($conn->query($sql)){
//     echo 'Data inserted successfully!';
// }else{
//     echo 'not inserted inserted successfully!';
// }

?>
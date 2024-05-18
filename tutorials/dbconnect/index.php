<?php

$server = "localhost";
$userName = "root";
$password = '';
$dbname = 'test';

$conn = new mysqli($server, $userName, $password, $dbname);

print_r($conn);

?>
<?php

$conn = new mysqli('localhost', 'root', '', 'test');

if (!empty($conn->connect_error)) {
    echo '<h1>Connection failed</h1>';
}
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "<pre>";


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];

$target = 'uplods/';
$randnum = rand(10, 100);
$path = $target.$randnum.$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $path);

print_r($_POST['name']);
$sql = "INSERT INTO uusers (name, email, phone, age, image) VALUES ('$name', '$email', '$phone', '$age', '$path')";

// echo $conn->query($sql);

<?php

require_once '../vendor/autoload.php';
require_once '../vendor/fakerphp/faker/src/autoload.php';
require '../tutorials/dbconnect/index.php';

// use the factory to create a Faker\Generator instance
echo "data inserting page";
$faker = Faker\Factory::create();
// generate data by calling methods
// echo $faker->name()."<br>";
// // 'Vince Sporer'
// echo $faker->email()."<br>";
// echo $faker->phoneNumber()."<br>";
// 'walter.sophia@hotmail.com'
// echo $faker->text()."<br>";
// print_r($conn);
// for($i=0; $i<10; $i++){
//     $name = $faker->name();
//     $email = $faker->email();
//     $phone = $faker->phoneNumber();
//     $age = rand(10, 100);
//     echo "hello";
//     $sql = "INSERT INTO students (name, email, phone, age) VALUES ('$name', '$email', '$phone', '$age')";
//     $conn->query($sql);
//     // if(!$conn->query($sql)){
//     //     echo "data not inserted";
//     //     break;
//     // }
// }

$sql = "SELECT * FROM `students`";

$result = $conn->query($sql);


// for ($i=0; $i < 10; $i++) { 
//     $data = $result->fetch_assoc();
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sql Query</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<5;$i++){ 
                $data = $result->fetch_assoc();
                // print_r($data);
                ?>
            <tr>
                <th scope="row"><?php echo $data['id']; ?></th>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['age']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
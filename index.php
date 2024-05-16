<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Intro</title>
</head>
<body>
    <h1>Hello guys how are you?</h1>
</body>
</html>

<?php

// let name = "azad"; //javascript variables

$age = 56;
$name = 'myank'; 

//typeof() in javascript of check datatype
var_dump($name);

echo 'Age of $name is $age.';
echo "Age of $name is $age.";

// `${name}`//template string
//document.write('hello');
//console.log();
//alert();
//innerHTML();
//innerText();

//forloop
for($a=0;$a<5;$a++){
    echo "$a Loop";
}
//while loop
$a=0;
while($a<5){
    echo "Azad";
    $a++;
}

//index array
$arr = ['Azad', 'aman', 'sultan'];
echo "<br>".$arr[2];

//Associative array
$assosArr = [
    'name'=>'Azad',
    'age'=>29
];
echo "<br>".$assosArr['name'];

// arr.foreach(()=>{
// })

//javascript push
// arr.push('azad');
//php push
// array_push('','');

foreach($arr as $val){
    echo "<br>".$val;
}

foreach($assosArr as $key=>$val){
    // echo "<br>".$key."=>".$val;
    echo "<br> $key => $val";
}

//function

function myFunc(){
    echo "Hello guys this is my function";
    return 85;
}

echo myFunc();

?>
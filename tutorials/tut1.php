<?php
//super global variables => available in all scope

//super global variables are like associative array

$name = "azad";

for ($i=0; $i < 5; $i++) { 
    echo $name."<br>";
    // dirictly access of global variables
}

if(true){
    // dirictly access of global variables
    $name = 'prakash';
}

echo "<br> $name <br>";
$expression = 'x';
switch($expression){
    case 'x':
        break;

    // dirictly access of global variables
}

function myFunc(){
    // global $name;//one way to access global variables \
    // echo $name."insde function";
    // $GLOBALS[];//it is a superglobal variable which store all the global variable as an associative array.
    echo $GLOBALS['name']."insde function";
    $GLOBALS['name'] = "sundar";
}

myFunc();


echo "<br>".$name."after overwriting.";
echo "<br> $name after overwriting.'";

?>
<?php


$fruits = ['apple', 'banana', 'mango', 'papaya'];

$number = [1, 2,3,4,5,6.7,8,9,10,11,12,13];

$even = array_filter($number, function($e){
    return $e%2==0;
});

$odd = array_filter($number, function($e){
    return $e%2!=0;
});

// print_r($odd);

//php map 

// $number2 = [];
// for($i=0;$i<count($number); $i++){
//     $number2[] = $number[$i]*2;
// }
// print_r($number2);

$number2 = array_map(function($element){
    return $element*3;
},$number);

print_r($number2);

// $sum=0;
// for($i=0;$i<count($number);$i++){
//     $sum = $sum + $number[$i];
// }
// echo $sum;

//reduce 
$sum = array_reduce($number, function($e){
    return 141;
}, 0);

print_r($sum);

//array_walk()
// array_walk(array_name, callback)

array_walk($number, function($e){
    echo $e;
})


?>
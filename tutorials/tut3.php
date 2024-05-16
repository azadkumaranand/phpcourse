<?php
//Regular expression => regex;
'/[a-z]/';

$str = "hello AZAD kumar how fine azad kumazad";
//i is the flag for case-insensitive search
// preg_match=>return only first mathc
// preg_match_all=>return total number of match
// echo preg_match_all('/azad/i', $str);

// $patten = '/^[abcABC]/';
$patten = '/^[a-zA-Z]/';

$str = "a Hello A8zrd Hello";

$patten = '/^hello/i';
$patten = '/hello$/i';
$patten = '/^[a-z]{4}$/';//search for latter between a to z start with 4 latter 
$str = "abcacd hello abc";

$patten = '/^[a-z]{2,5}/';
$str = "a8789456";
$patten = '/^[a-z]+/';//minimum 1 match of [a-z] at starting
// echo preg_match($patten, $str);

$email = "a78.azad@gmail.com";

$email_patter = '/[a-zA-Z0-9._]+@[a-zA-Z]+\.[a-zA-Z]{2,}/';

// echo preg_match($email_patter, $email);

$phone = '77898954a6';
if(strlen($phone) == 10){
    $phone_pattern = '/[0-9]{10}/';
    echo preg_match($phone_pattern, $phone);
}else{
    echo "not matched";
}


?>
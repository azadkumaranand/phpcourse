<?php

// echo $_SERVER['REQUEST_METHOD'];

// print_r($_POST);

// echo " ".$_POST['phone'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $name_pattern = '/[a-zA-Z]/';
    $phone_pattern = '/[0-9]{10}/';
    $email_pattern = '/[a-zA-Z0-9._]+@[a-zA-Z]+\.[a-zA-Z]{2,}/';


    if(!preg_match($name_pattern, $name)){
        echo 'Please enter a valid name';
    }
    if (strlen($phone)==10) {
        if(!preg_match($phone_pattern, $phone)){
            echo 'Please enter a valid phone';
        }
    }else{
        echo "please enter 10 digit phone";
    }
    
    if(!preg_match($email_pattern, $email)){
        echo 'Please enter a valid email';
    }
    
    if(preg_match($name_pattern, $name) && preg_match($phone_pattern, $phone) && preg_match($email_pattern, $email)){
        echo "form submitted";
    }
}

?>
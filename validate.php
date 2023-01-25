<?php

$name = filter_input(INPUT_POST, 'name');
$number = filter_input(INPUT_POST, 'number');
$email = filter_input(INPUT_POST, 'email');

if(empty($name)) {
    $name_error = 'Please Enter a Name';
}

if(empty($number)) {
    $number_error = 'Please Enter a Number';
}elseif(strlen($number) < 10){
    $number_error = 'Please Enter a 10 Digit Number';
}

if(empty($email)) {
    $email_error = 'Please Enter an Email';
}

if (empty($name_error) && empty($number_error) && empty($email_error)) {
    include('process-form - PDO.php');
}else{
    include('Web1.php');
}
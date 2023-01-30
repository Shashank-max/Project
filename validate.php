<?php

$name = filter_input(INPUT_POST, 'name');
$country_code = filter_input(INPUT_POST, 'country_code');
$number = filter_input(INPUT_POST, 'number');
$email = filter_input(INPUT_POST, 'email');
$location = filter_input(INPUT_POST, 'location');

if(empty($name)) {
    $name_error = 'Please Enter a Name';
}
if(empty($country_code)) {
    $country_code_error = 'Please Select a Country Code';
}

if(empty($number)) {
    $number_error = 'Please Enter a Number';
}elseif(strlen($number) < 10){
    $number_error = 'Please Enter a 10 Digit Number';
}

if(empty($email)) {
    $email_error = 'Please Enter an Email';
}
if(empty($location)) {
    $location_error = 'Please Select a Location';
}

if (empty($name_error) && empty($country_code_error) && empty($number_error) && empty($email_error) &&empty($location_error)) {
    include('process-form - PDO.php');
}else{
    include('Web1.php');
}
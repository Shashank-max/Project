<?php

// print_r($_POST);

$host = "localhost";
$dbname = "Information";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);

if (mysqli_connect_errno()) {
    die("Error" . mysqli_connect_error());
}
else {
    echo "Connection Made";
}


    
    $name = $_POST["name"];
    $country_code = $_POST["country_code"];
    $number = filter_input(INPUT_POST, "number", FILTER_VALIDATE_INT);
    $email = $_POST["email"];
    $location = $_POST["location"];



$sql = "INSERT INTO info (name, country_code, number, email, location)
        VALUES ('$name', '$country_code', number, '$email', '$location')";



    

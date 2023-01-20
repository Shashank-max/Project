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


//     $stmt = mysqli_stmt_init($conn);

//     if (! mysqli_stmt_prepare($stmt, $sql)) {
//         die(mysqli_error($conn));
//     }

//     mysqli_stmt_bind_param($stmt, "ssiss", $name, $country_code, $number, $email, $location);

//     if (mysqli_stmt_execute($stmt)) {
//         echo "Record Saved";
//     } 
//     else {
//     echo "Error: " . $sql . "<br>" . mysqli_stmt_error($stmt);
// }
    

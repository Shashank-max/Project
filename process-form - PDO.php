<?php




    $servername = "localhost";
    $dbname = "Information";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=Information", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";


        $name = $_POST["name"];
        $country_code = $_POST["country_code"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        $location = $_POST["location"];


        $stmt = $conn->prepare("INSERT INTO info (name, country_code, number, email, location)
                            VALUES (:name, :country_code, :number, :email, :location)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':country_code', $country_code);
        $stmt->bindParam(':number', $number);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':location', $location);


        $stmt->execute();
        echo "Record Saved";
        include('Web1.php');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }





    

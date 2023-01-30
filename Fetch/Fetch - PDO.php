<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Information";


try {


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT name, country_code, number, email, location FROM info");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$start = 0;  $per_page = 10;
$page_counter = 0;
$next = $page_counter + 1;
$previous = $page_counter - 1;
$next = $page_counter + 1;
$previous = $page_counter - 1;

if(isset($_GET['start'])){
 $start = $_GET['start'];
 $page_counter =  $_GET['start'];
 $start = $start *  $per_page;
}

$q = "SELECT * FROM info LIMIT $start, $per_page";
$query = $conn->prepare($q);
$query->execute();

if($query->rowCount() > 0){
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
}

$count_query = "SELECT * FROM info";
$query = $conn->prepare($count_query);
$query->execute();
$count = $query->rowCount();

$paginations = ceil($count / $per_page);


echo "</table>";

?>

<?php


$input = filter_input_array(INPUT_POST);

if($input['action'] === 'edit')
{
	$query1 = "
	UPDATE info
	SET name = '" . $input['name'] . "',
	country_code = '" . $country_code . "',
	number = '" . $number . "',
	email = '" . $email . "',
	location = '" . $location . "',
	WHERE id = '" . $input["id"] . "'
	";
	$query = $conn->prepare($query1);
	$query->execute();
}
if($input['action'] === 'delete')
{
	$query2 = "
	DELETE FROM info
	WHERE id = '" . $input["id"] . "'
	";
	$query = $conn->prepare($query2);
	$query->execute();
}
echo json_encode($input);

?>

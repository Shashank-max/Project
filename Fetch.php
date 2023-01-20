<!DOCTYPE>
<html>
    <head>
        <title>Fetch</title>
        <meta charset = "UTF-8">
    </head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Country Code</th>
            <th>Mobile No.</th>
            <th>Email</th>
            <th>Location</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "Information");
        if($conn-> connect_error){
            die("Connection Error" . $conn->connect_error);
        }
        else{
            echo "Connection Succesful";
        }

        if(isset($_GET['page'])){
            $page = $_GET['page']; 
        }
        else{
            $page = 1;
        }
        
        $num_per_page = 10;
        $start_from = ($page - 1) * 10;
    
       

        $sql = "SELECT id, name, country_code, number, email, location FROM info LIMIT $start_from, $num_per_page";
        $result = $conn->query($sql);

        if ($result -> num_rows > 0){
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["country_code"] . "</td><td>" . $row["number"] . "</td><td>" . $row["email"] . "</td><td>" . $row["location"] . "</td></tr>";
            }
    
        }
       
        ?>
    </table>
    <?php
    $pr_query = "SELECT * FROM info";
    $pr_result = mysqli_query($conn, $pr_query);
    $total_record = mysqli_num_rows($pr_result);

    $total_pages = ceil($total_record/$num_per_page);

    for($i=1;$i<$total_pages;$i++){
        echo "<a href='Fetch.php?page=".$i."'>$i</a>";
    }

    // echo $total_record;
    // echo $total_pages;

    ?>
</body>
</html>

            
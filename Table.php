<html>
    <head>
        <title>Pagination</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>
    <body>
        <?php include_once 'Fetch - PDO.php'; ?>
        <div style="width: 600px; border: 1px solid black; margin: 10px;">
            <table>
                <thead>
                 <th class="bg-primary">Id</th>
                 <th class="bg-primary">Name</th>
                 <th class="bg-primary">Country Code</th>
                 <th class="bg-primary">Number</th>
                 <th class="bg-primary">Email</th>
                 <th class="bg-primary">Location</th>
                </thead>
                <tbody>
                <?php 
                    foreach($result as $data) { 
                        echo '<tr>';
                        echo '<td>'.$data['id'].'</td>';
                        echo '<td>'.$data['name'].'</td>';
                        echo '<td>'.$data['country_code'].'</td>';
                        echo '<td>'.$data['number'].'</td>';
                        echo '<td>'.$data['email'].'</td>';
                        echo '<td>'.$data['location'].'</td>';
                        echo '</tr>';
                    }
                 ?>
                </tbody>
            </table>
            <center>
            <ul class="pagination">
            <?php
                if($page_counter == 0){
                    echo "<li><a href=?start='0' class='active'>0</a></li>";
                    for($j=1; $j < $paginations; $j++) { 
                      echo "<li><a href=?start=$j>".$j."</a></li>";
                   }
                }else{ 
                    for($j=0; $j < $paginations; $j++) {
                     if($j == $page_counter) {
                        echo "<li><a href=?start=$j class='active'>".$j."</a></li>";
                     }else{
                        echo "<li><a href=?start=$j>".$j."</a></li>";
                     } 
                  }
                } 
            ?>
            </ul>
            </center>    
        </div>  
    </body>
</html>
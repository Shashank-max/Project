<html>
    <head>
        <title>Fetch</title>
        <link  rel="stylesheet"  href="styling.css"/>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>          
          <script src="jquery.tabledit.min.js"></script>
    </head>
    <body background="bg1.1.jpg">
        <?php include_once 'Fetch - PDO.php'; ?>
        <center>
            <div class = "container">
                <div class="container1">
            <table id="editable_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                 <th class="bg-primary">Id</th>
                 <th class="bg-primary">Name</th>
                 <th class="bg-primary">Country Code</th>
                 <th class="bg-primary">Number</th>
                 <th class="bg-primary">Email</th>
                 <th class="bg-primary">Location</th>
                 <th class="bg-primary">Edit</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($result as $data) {
                        echo '<tr>';
                        echo '<td>' . $data['id'] . '</td>';
                        echo '<td>' . $data['name'] . '</td>';
                        echo '<td>' . $data['country_code'] . '</td>';
                        echo '<td>' . $data['number'] . '</td>';
                        echo '<td>' . $data['email'] . '</td>';
                        echo '<td>' . $data['location'] . '</td>';
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
                </div>
            </div>
            </center>
    </body>
</html>
<script>
    $(document).ready(function(){
        $('#editable_table').Tabledit({
            url: 'Fetch - PDO.php',
            columns:{
                identifier:[0, "id"],
                editable:[[1, 'name'], [2, 'country_code'], [3, 'number'], [4, 'email'], [5, 'location']]
            },
            restoreButton:false,
            onSucess:function(data, textStatus, jqXHR)
            {
                if(data.action == 'delete')
                {
                    $('#'+data.id).remove();
                }
            }
            
        });
    });
    </script>

    
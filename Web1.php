<?php
if(!isset($name)){
    $name = '';
}
if(!isset($email)){
    $email = '';
}
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="styling.css">
        <title> Form </title>
        <meta name="viewport" content="width-device-width, initial-scale=1" charset = "UTF-8">


        <body background="bg1.1.jpg">
            <div>
            <center>
            <div class = "container1" id="d0">            
                <div id = "d1">
                    <h1>Please Fill This Form</h1>
                </div>
                
            <form method = "post" action="validate.php" align ="center">
                <div id="d2">
                    <label for = "name">Name :</label>
                    <input type = "text" id = "name" name = "name" value="<?php echo htmlspecialchars($name) ?>"/>
                </div>
                    <?php if(isset($name_error)) { ?>
                    <p><?php echo $name_error ?></p>
                    <?php } ?><br>
                <div id="d3">
                    <label for = "country_code">Country Code :</label>
                    <select id = "country_code" name ="country_code" value="<?php echo htmlspecialchars($name) ?>">
                        <option></option>
                        <option>+1</option>
                        <option>+91</option>
                        <option>+977</option>
                    </select>
                </div>
                <?php if(isset($country_code_error)) { ?>
                    <p><?php echo $country_code_error ?></p>
                    <?php } ?><br>
            
            
                <div id ="d4">
                    <label for = "number">Number :</label>
                    <input type = "number" id = "number" name = "number" value="<?php echo htmlspecialchars($number) ?>"/>
                </div>
                    <?php if(isset($number_error)) { ?>
                        <p><?php echo $number_error ?></p>
                        <?php } ?><br>
                <div id="d5">
                    <label for ="email">Email :</label>
                    <input type = "email" id = "email" name = "email" value="<?php echo htmlspecialchars($email) ?>"/>
                </div>
                <?php if(isset($email_error)) { ?>
                    <p><?php echo $email_error ?></p>
                    <?php } ?><br>
                <div id="d6">
                    <label for = "location">Location :</label>
                    <select id = "location" name = "location" value="<?php echo htmlspecialchars($location) ?>">
                        <option></option>
                        <option>New Delhi</option>
                        <option>Mumbai</option>
                    </select>
                </div>
                <?php if(isset($location_error)) { ?>
                    <p><?php echo $location_error ?></p>
                    <?php } ?><br>
                <br>

                <div class="container py-5 text-center">
                <a href="#" class="link float-on-hover">
                <button class="button" id="submit" type="submit">Submit</button>
                </a>
                </div>
            
            </form>
            
            </div>
                </div>

        </center>
        </div>
        </body>
    </div>
    </a>
    </head>
</html>
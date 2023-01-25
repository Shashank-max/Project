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
        <title> Form </title>
        <meta charset = "UTF-8">
        <body>
            <h1>Please Fill this form</h1>
            <form method = "post" action="validate.php">
                <label for = "name">Name :</label>
                <input type = "text" id = "name" name = "name" value="<?php echo htmlspecialchars($name) ?>"/><br>
                    <?php if(isset($name_error)) { ?>
                    <p><?php echo $name_error ?></p>
                    <?php } ?>

                <label for = "country_code">Country Code :</label>
                <select id = "country_code" name ="country_code">
                     <option>Please Select</option>
                     <option>+1</option>
                     <option>+91</option>
                     <option>+977</option>
                </select><br>
                <br>

                <label for = "number">Number :</label>
                <input type = "number" id = "number" name = "number" value="<?php echo htmlspecialchars($number) ?>"/><br>
                    <?php if(isset($number_error)) { ?>
                        <p><?php echo $number_error ?></p>
                        <?php } ?>
                
                <label for ="email">Email :</label>
                <input type = "email" id = "email" name = "email" value="<?php echo htmlspecialchars($email) ?>"><br>
                <?php if(isset($email_error)) { ?>
                    <p><?php echo $email_error ?></p>
                    <?php } ?>
                
                <label for = "location">Location :</label>
                <select id = "location" name = "location">
                    <option>Please Select</option>
                    <option>New Delhi</option>
                    <option>Mumbai</option>
                </select><br>
                <br> 
                
                <button id="submit" type="submit">Submit</button>
            
            </form>

        </body>
    </head>
</html>
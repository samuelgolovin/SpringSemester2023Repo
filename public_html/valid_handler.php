<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Valid Handler</title>
</head>
<body>
    <?php
        if(!empty($_POST['quantity'])){
            $quantity = $_POST['quantity'];
            if(!is_numeric($quantity)){
                $quantity = NULL;
                echo "Quantity must be numeric<br/>";
            }
        }
        else{
            $quantity = NULL;
            echo "Quantity must enter a quantity<br/>";
        }
        #sep
        if(!empty($_POST['email'])){
            $email = $_POST['email'];
            $pattern = '/\b[\w.-]+@[\w.-] +\.[A-Za]{2,6}\b/';
            if(!is_numeric($quantity)){
                $quantity = NULL;
                echo "Quantity must be numeric<br/>";
            }
        }
        else{
            $email = NULL;
            echo "Quantity must enter a quantity<br/>";
        }
    ?>
</body>
</html>
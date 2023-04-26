<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Isset Handler</title>
</head>
<body>
    <?php
        if(isset($_POST['definition'])){
            $definition = $_POST['definition'];
        }
        else{
            $definition = NULL;
        }

        if($definition!=NULL){
            if($definition != 'Scripting'){
                echo "$definition is incorrect";
            }
            else{
                echo "$definition is correct";

            }
            
        
        }
        else{
            echo "You must answer";
        }
    ?>
</body>
</html>
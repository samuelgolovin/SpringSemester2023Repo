<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Single Form & Response</title>
</head>
<body>
    <?php
        if($_server['REQUEST_METHOD'] != 'POST')
        {
            echo'
            <form action = "single.php" method="POST">
            <fieldset>
                <legend>Send us your comments</legend>
                <textarea name="comment" cols="40" rows="5"></textarea>
                <p><input type="submit"></p>
            </fieldset>';
        }
        else{
            if(!empty($_POST['comment']))
            {
                $comment = $_POST['comment'];
                echo "Comment: $comment";
            }
            else{
                $comment = NULL;
                echo "you must enter a comment";
            }
        }
    ?>
</body>
</html>
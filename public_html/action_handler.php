<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Action Handler</title>
</head>
<body>
    <?php 
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $comment = $_POST['comment'];

    echo "<p>Thanks for this comment $name ...</p>";
    echo "<p><i>$comment</i></p>";
    echo "<p>We will reply to $mail</p>";
    ?>
</body>
</html>
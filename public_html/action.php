<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Action</title>
</head>
<body>
    <form action="action_handler.php" method="POST">
        <dl>
            <dt>name:<dd><input type="text" name="name"></dt>
            <dt>email address:<dd><input type="text" name="mail"></dt>
            <dt>comments:<dd><textarea name="comment" cols="20" rows="5"></textarea></dt>
        </dl>
        <p><input type="submit"></p>
    </form>
</body>
</html>
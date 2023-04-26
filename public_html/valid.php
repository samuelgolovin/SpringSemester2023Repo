<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>
<body>
    <form action="valid_handler.php" method="POST">
        <fieldset>
            <legend>Enter a quantity and email address</legend>
            <p>Quantity: <input type="text" name="quantity"></p>
            <p>Email address: <input type="text" name="email"></p>
        </fieldset>
        <p><input type="submit"></p>
    </form>
</body>
</html>
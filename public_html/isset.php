<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Isset</title>
</head>
<body>
    <form action="isset_handler.php" method="POST">
        <fieldset>
            <legend>What kind of language is php?</legend>
            Scripting<input type="radio" name ="definition" value="Scripting"><br/>
            Markup<input type="radio" name ="definition" value="Markup"><br/>
            Programming<input type="radio" name ="definition" value="Programming"><br/>
        </fieldset>
        <p><input type="submit"></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="censura.php">
        <label for="paragrafo">Inserisci il paragrafo:</label><br>
        <textarea id="paragrafo" name="paragrafo"></textarea><br>
        <label for="parola">Inserisci la parola da censurare:</label><br>
        <input type="text" id="parola" name="parola"><br>
    <input type="submit" value="Censura">
</form>
</body>
</html>
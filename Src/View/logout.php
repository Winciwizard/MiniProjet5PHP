
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>

<h1>Bonjour <?php echo $_SESSION['pseudo'] ?></h1>
<form action="?page=logout" method="post">
<button type="submit" name="logout" id="logout" value="logout">Logout</button>
</form>

</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>

<h1>LOGIN</h1>
<form action="?page=login" method="post">
    <p>
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" /><br />

        <label for="pass">Pass</label>
        <input type="password" name="pass" id="pass"/><br />

        <input type="checkbox" name="remember_me" id="remember_me" value="ok">
        <label for="remember_me">Se souvenir de moi</label><br />

        <input type="submit" value="Valider" />
    </p>
</form>

</body>
</html>
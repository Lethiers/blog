<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style/style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Connexion</title>
</head>
<body>
    <form action="" method="post">
        <p>E-mail : <input type="email" name ="mail_util" pattern=
        "[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required></p>
        <p>Mot de passe : <input type="password" name="pwd_util"></p>
        <p><input type="submit" value="connexion" name="connexion"></p>
    </form>
</body>
</html>
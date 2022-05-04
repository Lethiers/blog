<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style/style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <h3>Ajouter un utilisateur:</h3>
    <form action="" method="post">
        <p>Votre nom :<input type="text" name="name_util"></p>
        <p>Votre prénom :<input type="text" name="first_name_util"></p>
        <p>Votre e-mail :<input type="email" name="mail_util"pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" 
        name="email" required></p>
        <p>Votre mot de passe :<input type="password" name="pwd_util" required></p>
        <p><input type="checkbox" name="isAdmin">je suis un admin</p>
        <p><input type="submit" value="Ajouter" name="addUser"></p>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        
      </script>
</body>

</html>

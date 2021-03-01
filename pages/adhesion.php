<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/940412168c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/animation.css">
    <link rel="stylesheet" href="../CSS/animation%20carousel.css">
    <title>Formulaire D'inscription</title>
</head>

<body id="bodyForm">
<?php
include "./partials/header.php";
?>
    <div id="formCont" >
        <h1>Formulaire D'inscription</h1>
        <form id="formulaire" action="" method="post">
            <label for="name">Votre nom</label>
            <input type="text" id="name" name="user_name" placeholder="Votre nom ici">
            <label for="mail">Votre e-mail</label>
            <input type="email" id="mail" name="user_mail" placeholder="Votre e-mail ici">
            <label for="password">Password</label>
            <input type="password" id="password" name="user_password" placeholder="Votre mot de passe">
            <input type="submit" value="Envoyer" name="user_submit">
        </form>
    </div>
</body>
</html>

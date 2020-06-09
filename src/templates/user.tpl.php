<?php
use Rentit\Session;
?>


<html>
<head>

    <link rel="stylesheet" type="text/css" href="src/public/css/style.css">
</head>
<body>

<div class="container">
    <img class="imagen1" src="src/public/img/header-bg4.jpg">

    <div class="formulario">
        <h1><?=$title; ?></h1>


        <form action="/user/login" method="post">
            <label for="nom">Nombre</label>
            <input type="text" name="username" placeholder="Introduce tu nombre.."><br><br>
            <label for="pasw">Contraseña</label><input type="password" name="password" placeholder="Introduce la contraseña.."><br><br>
            <input type="hidden" name="token" value="<?= \Rentit\Session::get('token')?>">
            <input type="submit" name="submit" value="Entra"><br>

            <p><br>No tienes una cuenta?<a href="/registrar">Registrate aqui!</p>


        </form>
    </div>
</div>
</body>

</html>
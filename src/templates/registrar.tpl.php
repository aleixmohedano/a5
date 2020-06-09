
<!DOCTYPE html>
<html>
<head>
    <title>Registrar</title>
    <style type="text/css">
        *{margin: 0px; padding: 0px;}
        body{margin: 0px;}
        .container{width: 100%;height: 100%;}
        .formulario{margin-left: 440px; position: absolute;background-color: lavender;top:100px;opacity: 0.9;font-family: sans-serif;}
        .imagen1{width: 100%;height: 100%;}
        form{height: 250px;text-align: right;margin-right: 50px;margin-top: 50px;}
        label{margin: 20px;}

        h1{margin: 50px;}

    </style>
</head>
<body>
<div class="container">
    <img class="imagen1" src="src/public/img/header-bg4.jpg">

    <div class="formulario">
        <h1><?=$title; ?></h1>

        <form action="/registrar/registrar" method="post">
            <label for="nom">Nombre</label>
            <input type="text" name="username" placeholder="Introduce tu nombre"><br><br>
            <label for="em">Email</label><input type="email" name="email" placeholder="Introduce el email.."><br>
            <label for="em">Telefóno</label><input type="tel" name="telf" placeholder="Introduce el numero de telefóno.."><br>
            <label for="pasw">Contraseña</label><input type="password" name="password" placeholder="Contraseña nueva.."><br>
            <label for="pasw">Contraseña</label><input type="password" name="password2" placeholder="Repite la contrasena.."><br>

            <input type="submit" name="submit" value="Registrar"><br>




        </form>
    </div>
</div>
</body>
</html>

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
        #desc{ height: 100px;}
        form{height: 330px;text-align: right;margin-right: 50px;}
        label{margin: 20px;}
        a{text-decoration: none;}
        h1{margin-top: 50px; margin-left: 50px;margin-bottom: 25px;}

    </style>
</head>
<body>
<div class="container">
    <img class="imagen1" src="src/public/img/header-bg4.jpg">

    <div class="formulario">
        <h1>INMUEBLES DAW</h1>

        <form action="/inmuebles/inmuebles" method="post">
            <label for="nom">Titulo</label>
            <input type="text" name="title" placeholder="Introduce el tipo de inmuble"><br><br>
            <label for="pasw">Precio</label><input type="text" name="price" placeholder="Introduce el precio.."><br>
            <label for="pasw">Descripción</label><input type="text" id="desc" name="description" placeholder="Descripción.."><br>

            <input type="submit" name="submit" value="Registrar"><br><br>
            <a href="/default">Volver</a>




        </form>
    </div>
</div>
</body>
</html>
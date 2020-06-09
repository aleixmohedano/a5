


<html>
<head>

    <link rel="stylesheet" type="text/css" href="">
    <style>
        *{margin: 0px; padding: 0px;}
        body{margin: 0px;}
        .container{width: 100%;height: 100%;}
        .formulario{margin-left: 430px; position: absolute;background-color: lavender;top:100px;opacity: 0.9;font-family: sans-serif;}
        .imagen1{width: 100%;height: 100%;}
        form{width:300px;height: 260px;text-align: left;margin-left: 40px;margin-top: 50px;}
        label{margin: 20px;}

        h1{margin: 50px;}
        h2{color:crimson;margin-left: 240px;}
        p{margin-left: 40px;}
        a{text-decoration: none;}
        button{margin-left: 80px;}
    </style>
</head>
<body>

<div class="container">
    <img class="imagen1" src="src/public/img/Logo.jpeg">

    <div class="formulario">
        <h1><?=$title; ?></h1>


        <form action="post" method="post">
            <label for="nom">Tu nombre es: <strong><?php echo $_SESSION['user'];?></strong></label><br><br>
            <label for="nom">Tu email es: <strong><?php echo $_SESSION['email'];?></strong></label><br><br>
            <label for="nom">Tu telefóno es: <strong><?php echo $_SESSION['telf'];?></strong></label><br><br><br>


            <a href="/default" id="but">Volver</a>


        </form>
    </div>
</div>
</body>

</html>
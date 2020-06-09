<html>
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Lloguer d'immobles</title>

    <!-- Bootstrap core CSS -->
    <link href="src/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="src/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="src/public/css/freelacer.min.css" rel="stylesheet">
    <link href="src/public/css/style.css" rel="stylesheet">

</head>



<body id="page-top">

<?php
use Rentit\Models\Property;
use Rentit\Models\User;
use Rentit\Session;
use Rentit\Controllers\UserController;
use Rentit\Models\DB;
new DB();
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Inmuebles DAW</a>

        <a class="nav-link js-scroll-trigger" href="/perfil">Bienvenido <strong><?php echo $_SESSION['user'];?></strong></a>

        <a class="nav-link js-scroll-trigger" href="/inmuebles">Añadir inmueble</a>


        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Venta</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/user/logout">Desconectar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead -->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

        <!-- Masthead Avatar Image -->
        <img class="masthead-avatar mb-5" src="public/img/Logo.jpeg" alt="">

        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-0">Inmuebles DAW</h1>

        <!-- Masthead Subheading -->
        <p class="masthead-subheading font-weight-light mb-0">Lo mejor en decoracion del hogar</p>

    </div>
</header>

<!-- Portfolio Section -->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h2 class="section-heading text-uppercase">Inmuebles</h2>

        <div class="row">



            <!--BD-->
            <?php


            $inmuebles=Property::all();
            foreach ($inmuebles as $casa){
                ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            </div>
                        </div>
                        <img class="img-fluid" src="" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <?php
                        $titulo=$casa->title;
                        echo "<h4>".$titulo."</h4>";

                        echo "<p> Casa: ".$casa->price." € ".$casa->descripcion."</br></p>";


                        ?>


                    </div>
                </div>

                <?php
            }
            ?>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="/inmuebles">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>
                    </h4>
                    <p class="text-muted"></p></br>


                </div>
            </div>





        </div>
    </div>

</section>



            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Plugin JavaScript -->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Contact Form JavaScript -->
            <script src="js/jqBootstrapValidation.js"></script>
            <script src="js/contact_me.js"></script>

            <!-- Custom scripts for this template -->
            <script src="js/freelancer.min.js"></script>

</body>

</html>
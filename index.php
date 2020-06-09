<?php
//development mode
ini_set('display_errors','On');
//autoload
require __DIR__.'/vendor/autoload.php';

require  'config.php'; //acceder a autoload

use Rentit\Models\DB;
use Illuminate\Database\Capsule\Manager as Capsule;
use Rentit\Controllers\LoginController;
use Rentit\Controllers\RegistrarController;


use Rentit\App;
use Rentit\Session;
session::init();
//getToken();
//session_start();
//El método estático de de la classe App
App::run();

//new DB();
//$user=RegistrarController::create_user("user3",password_hash("123456",PASSWORD_BCRYPT));
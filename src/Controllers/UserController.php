<?php


namespace Rentit\Controllers;


use Rentit\Controller;

use Rentit\Models\DB;
use Rentit\Models\User;
use Rentit\Session;

new DB();
final class UserController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }

    public function index()

    {
        $data = ['title' => 'Autenticacion de usuarios'];

        $this->render($data);

    }
        function error() { throw new \Exception("[ERROR::]:Non existent method"); }



    public function login(){


        if(!empty($_REQUEST['username'])&&(!empty($_REQUEST['password']))){

            $usuario=filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
            $passwd_str=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

            $user=User::where('username',$usuario)->get()->first();


            if($user!=null && password_verify($passwd_str,$user->password)){

                $_SESSION['user']=$_POST['username'];
                Session::set('user',$user);
                Session::set('logged',true);
                header('Location:/default');
            }
            else{
                $this->error("Password o usuario incorrecta");

            }

        }

    }
    public function logout(){
        Session::destroy();
        header('Location:/user');
    }


}
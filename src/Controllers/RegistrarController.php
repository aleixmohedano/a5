<?php


namespace Rentit\Controllers;


use Rentit\Controller;
use Rentit\Models\DB;
use Rentit\Models\User;
use Rentit\Session;

new DB();
final class RegistrarController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);

    }

    public function index()

    {
        $data = ['title' => 'Crea una cuenta'];

        $this->render($data);
    }
    function error() { throw new \Exception("[ERROR::]:Non existent method"); }


    public static  function create_user($username,$email,$telf,$password){
        $user=User::create([
            'username'=>$username,
            'email'=>$email,
            'telf'=>$telf,
            'password'=>$password
                ]);
        return $user;
    }
    public function registrar()
    {
        if (!empty($_REQUEST['username']) &&
            !empty($_REQUEST['email']) &&
            !empty($_REQUEST['telf']) &&
            !empty($_REQUEST['password']) &&
            !empty($_REQUEST['password2'])

        ) {
            $usuario = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $tel = filter_input(INPUT_POST, 'telf', FILTER_SANITIZE_NUMBER_INT);
            $passwd1 = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $passwd2 = filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_STRING);

            if ($passwd1 == $passwd2) {
                $passwdhash = password_hash($passwd1,PASSWORD_ARGON2I);
                try {
                    $user = $this->create_user($usuario,$email,$tel, $passwdhash);

                    $_SESSION['user']=$_POST['username'];
                    $_SESSION['email']=$_POST['email'];
                    $_SESSION['telf']=$_POST['telf'];
                    header('location:/default');
                } catch (\Exception $e) {
                    $this->error($e->getMessage());
                }
            } else {
                $this->error("Password does not match");
            }
        }
        $this->error("Fill the form");
    }
    public function logout(){
        Session::destroy();
        header('Location:/user');
    }
}


<?php


namespace Rentit\Controllers;


use Rentit\Controller;
use Rentit\Models\DB;
use Rentit\Models\User;
use Rentit\Models\Property;
use Rentit\Session;

new DB();
final class InmueblesController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }

    public function index()

    {
        $data = ['title' => 'Añadir inmueble'];

        $this->render($data);
    }
    function error() { throw new \Exception("[ERROR::]:Non existent method"); }



    public static  function create_inmueble($title,$price,$description)
    {
            $user=User::value('id');
            $inmueble = Property::create([
                'title' => $title,
                'price' => $price,
                'description' => $description,
                'user_id' => $user
            ]);

            return $inmueble;

    }


    public function inmuebles()
    {
        if (!empty($_REQUEST['title']) &&
            !empty($_REQUEST['price']) &&
            !empty($_REQUEST['description'])

        ) {

            $usuario=filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
            $titulo = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $precio = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
            $desc = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
            $userid = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_NUMBER_INT);


               $inmueble= $this->create_inmueble($titulo, $precio, $desc);


                header('location:/');


            } else {
                $this->error("Fill the form");
            }
        }




}
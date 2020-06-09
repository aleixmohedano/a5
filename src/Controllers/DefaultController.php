<?php


namespace Rentit\Controllers;


use Rentit\Controller;

class DefaultController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }

    public function index()

    {

        $data = ['title' => 'Inmuebles DAW',];

        $this->render($data);

        function error() { throw new \Exception("[ERROR::]:Non existent method"); }
    }


    public function logIn(){
        var_dump($_POST);
    }
}
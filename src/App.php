<?php
namespace Rentit;

class App
{


static function run(){
    //construir las rutas solo en carpeta Controoler , ej use controller , default controller
   // new DB();
    //array
    $routes=self::getRoutes();
   // var_dump($routes);
   // die;

    //capturar Request
    $request=new Request();
    $controller=$request->getController(); //sacamos el controller
    $action=$request->getAction(); //sacamos la action


    try{
        if(in_array($controller, $routes)){ //si la ruta esta dentro del arrray si no lo ponemos y la creamos con new
            $nameController='\\Rentit\Controllers\\'.ucfirst($controller).'Controller'; //genero el controlador u en majuscula
            $objCont=new $nameController($request); //y lo lanzo el controlador


            //comprobamos si hay una function con este nombre en el objeto
            if(is_callable([$objCont,$action])){ //si dentro del objeto hay este metodo
                call_user_func([$objCont,$action]); //si existe lo llama
            }else{
                //metodo no existe
                call_user_func([$objCont,'error']);
            }
        }else{
            throw new \Exception("[ERROR]: Ruta no definida");
        }

    }catch (\Exception $e){ //arriba si hay un error lo capturara ariiba al traves de catch
        echo $e->getMessage();
    }

}

    /*
     * Extract controlle and method
     * @return array
     */


    static function getRoutes():Array{ //return de la function que sera un array
        $dir=__DIR__.'/Controllers'; // . e sumar
        $handle=opendir($dir); //abrir el directorio
        //para que recora  el directorio
        while (false!=($entry=readdir($handle))){ //guarda en una variable entry cada de una variable del manejador(las entradas)
            if($entry!="." && $entry!="..") { //ficheros con un punct y ..
           $routes[]=strtolower(substr($entry,0,-14));
            }
        }
        return $routes;
    }
}
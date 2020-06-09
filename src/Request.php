<?php


namespace Rentit;


class Request
{
private $controller;
private $action;
private $method;
private $parrams;


protected $arrURI;
function __construct()
{
    $requestString=htmlentities($_SERVER['REQUEST_URI']);
    $this->arrURI=explode('/',$requestString);
    array_shift($this->arrURI);
   $this->extractURI();

}

private function extractURI(){
    $lenght=count($this->arrURI);
    switch ($lenght){
        case 1:
            if($this->arrURI[0]==""){
                $this->setController('user');
            }else{
                $this->setController($this->arrURI[0]);
            }
            $this->setAction('index');
            break;
        case 2:
            $this->setController($this->arrURI[0]);
        if($this->arrURI[1]==""){
            $this->setAction('index');
        }else {
            $this->setAction($this->arrURI[1]);
        }
            break;

        default:
            $this->setController($this->arrURI[0]);
            $this->setAction($this->arrURI[1]);
        $this->Params();
        break;

    }
    $this->setMethod(htmlentities($_SERVER['REQUEST_METHOD']));
}

private function Params(){
    if($this->arrURI!=null){
        $arr_lenght=count($this->arrURI);
        if($arr_lenght>2){
            array_shift($this->arrURI);
            array_shift($this->arrURI);
            $arr_lenght=count($this->arrURI);
            if($arr_lenght%2==0){
                for($i=0;$i<$arr_lenght;$i++){
                    if($i%2==0){
                       $arr_k[]=$this->arrURI[$i];
                    }else{
                        $arr_v[]=$this->arrURI[$i];
                    }
                }
                $res=array_combine($arr_k,$arr_v);
                $this->setParrams($res);
            }else{
                $this->setParrams(null);
            }
        }
    }
}

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @param mixed $controller
     */
    public function setController($controller): void
    {
        $this->controller = $controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action): void
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return htmlentities($_SERVER['REQUEST_METHOD']);
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method): void
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getParrams()
    {
        return $this->parrams;
    }

    /**
     * @param mixed $parrams
     */
    public function setParrams($parrams): void
    {

        $this->params = $params;
    }


}
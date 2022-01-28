<?php 
class router{

    protected $routes = [
        "GET"=>[],
        "POST"=>[]
    ];

    static function  load($file){
        
        $router = new static;

        require $file;

        return $router;

    }


    function get($uri, $controller){
        $this->routes["GET"][$uri] = $controller;
    }

    function post($uri, $controller){
        $this->routes["POST"][$uri] = $controller;
    }
    
    function direct($uri, $requestType){
        if(array_key_exists($uri,$this->routes[$requestType])){
            return $this->routes[$requestType][$uri];
        }
        throw new Exception("Non ci sono route definite per questa uri");
    }
}
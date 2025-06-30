<?php
require 'routes.php';

class routes{

    function router($path){
        $url = $_SERVER['REQUEST_URI'];
        if(array_key_exists($url, $path)){
           require $path[$url];
        }
    }

}

$routes = new routes();
return  $routes->router($route)

?>
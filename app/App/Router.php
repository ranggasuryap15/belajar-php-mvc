<?php

namespace Generuskoding\BelajarPhpMvc\App;

class Router
{

    private static array $routes = [];

    // untuk menambahkan routes-nya 
    public static function add(string $method, string $path, string $controller, string $function):void {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public static function run():void {
        $path = '/';
        if (isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($path == $route['path'] && $method == $route['method']) {
                
                $controller = new $route['controller']; // membuat objek
                $function = $route['function']; // string function
                $controller->$function(); // memanggil controller dengan function
                return;
            }
        }

        http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }
}
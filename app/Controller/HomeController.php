<?php

namespace Generuskoding\BelajarPhpMvc\Controller;

use Generuskoding\BelajarPhpMvc\App\View;

class HomeController 
{
    function index():void {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat belajar PHP MVC dari Generus Koding",
        ];

        View::render('Home/index', $model);
    }

    function hello():void {
        echo "HomeController.hello()";
    }

    function world():void {
        echo "HomeController.world()";
    }

    // contoh function login dari request dan response
    function login():void {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password'],
        ];

        $response = [
            "message" => "Login Success"
        ];
        // kirimkan response ke view
        // tapi seharusnya nanti menggunakan objek class
    }
}
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Generuskoding\BelajarPhpMvc\App\Router;
use Generuskoding\BelajarPhpMvc\Controller\HomeController;
use Generuskoding\BelajarPhpMvc\Controller\ProductController;

// register routers
Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');

Router::run();
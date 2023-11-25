<?php

require_once __DIR__ . '/../vendor/autoload.php';

use TugasBesar\BookingClass2g\App\Router;
use TugasBesar\BookingClass2g\Controller\AuthController;
use TugasBesar\BookingClass2g\Controller\HomeController;

Router::add('GET', '/login', AuthController::class, 'login');
Router::add('POST', '/login', AuthController::class, 'prosesLogin');

Router::add('GET', '/home', HomeController::class, 'home');
Router::run();
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use TugasBesar\BookingClass2g\App\Router;
use TugasBesar\BookingClass2g\Controller\AuthController;
use TugasBesar\BookingClass2g\Controller\HomeController;
use TugasBesar\BookingClass2g\Middleware\HomeMiddleware;

Router::add('GET', '/login', AuthController::class, 'login');
Router::add('POST', '/login', AuthController::class, 'prosesLogin');
Router::add('POST', '/signout', AuthController::class, 'signout');

Router::add('GET', '/', HomeController::class, 'home');
Router::add('GET', '/booking', HomeController::class, 'booking', [HomeMiddleware::class]);
Router::run();

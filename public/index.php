<?php
$env = parse_ini_file(__DIR__ . '/../.env');
if ($env['ENVIRONMENT'] == 'development') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} elseif ($env['ENVIRONMENT'] == 'production') {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}

require_once __DIR__ . '/../vendor/autoload.php';

use TugasBesar\BookingClass2g\App\Router;
use TugasBesar\BookingClass2g\Controller\AuthController;
use TugasBesar\BookingClass2g\Controller\HomeController;
use TugasBesar\BookingClass2g\Middleware\AuthMiddleware;
use TugasBesar\BookingClass2g\Middleware\HomeMiddleware;

Router::add('GET', '/login', AuthController::class, 'login');
Router::add('POST', '/login', AuthController::class, 'prosesLogin');
Router::add('POST', '/signout', AuthController::class, 'signout');

Router::add('GET', '/', HomeController::class, 'home');
Router::add('GET', '/booking', HomeController::class, 'booking', [AuthMiddleware::class]);
Router::add('GET', '/roomSchedule/{id}', HomeController::class, 'roomSchedule', [AuthMiddleware::class]);

// API
Router::add('GET', '/api/ruang/{page}', HomeController::class, 'apiRuang');
Router::run();

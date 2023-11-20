<?php

require_once __DIR__ . '/../vendor/autoload.php';

use TugasBesar\BookingClass2g\App\Router;

// Router::add('GET', '/user', HomeController::class, 'index');
// Router::add('GET', '/jabatan', HomeController::class, 'jabatan');
Router::run();

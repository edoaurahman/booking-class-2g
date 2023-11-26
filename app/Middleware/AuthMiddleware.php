<?php

namespace TugasBesar\BookingClass2g\Middleware;

class AuthMiddleware implements Middleware
{
    public function before(): void
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            $path = $_SERVER['REQUEST_URI'];
            $_SESSION['next_path'] = $path;
            header('Location: /login');
            exit();
        }
    }
}

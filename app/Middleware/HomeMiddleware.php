<?php

namespace TugasBesar\BookingClass2g\Middleware;

class HomeMiddleware implements Middleware
{
    public function before(): void
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
        }
    }
}

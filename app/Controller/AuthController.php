<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\View;

class AuthController
{
    public function login()
    {
        View::render("Auth/login", []);
    }
}

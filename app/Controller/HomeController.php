<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\Request;
use TugasBesar\BookingClass2g\App\View;

class HomeController
{
    public function home()
    {
        View::render("Templates/header", ['title' => 'home']);
        View::render("Home/home", []);
        View::render("Templates/footer", ['title' => 'home']);
    }

    public function booking(): void
    {
        View::render("Templates/header", ['title' => 'booking']);
        View::render("Home/booking", []);
        View::render("Templates/footer", ['title' => 'booking']);
    }

    public function roomSchedule(): void
    {
        View::render("Templates/header", ['title' => 'booking']);
        View::render("Home/roomSchedule", []);
        View::render("Templates/footer", ['title' => 'booking']);
    }
}

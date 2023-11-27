<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\Request;
use TugasBesar\BookingClass2g\App\View;
use TugasBesar\BookingClass2g\Models\Ruang;

class HomeController
{
    public function home()
    {
        $ruang = new Ruang();
        $totalPage = $ruang->getTotalPage();
        View::render("Templates/header", ['title' => 'home']);
        View::render("Home/home", ['totalPage' => $totalPage]);
        View::render("Templates/footer", []);
    }

    public function booking(): void
    {
        View::render("Templates/header", ['title' => 'booking']);
        View::render("Home/booking", []);
        View::render("Templates/footer", []);
    }

    public function roomSchedule($id): void
    {
        View::render("Templates/header", ['title' => 'booking']);
        View::render("Home/roomSchedule", []);
        View::render("Templates/footer", []);
    }

    public function apiRuang($page)
    {
        $ruang = new Ruang();
        $ruangan = $ruang->getRuangPaggination($page);
        $data = [
            'ruangan' => $ruangan,
            'currentPage' => $page,
        ];
        echo json_encode($data);
    }
}

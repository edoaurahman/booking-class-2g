<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\View;

class AdminController
{
    public function dashboard()
    {
        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/dashboard", []);
    }

    public function mahasiswa()
    {
        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/mahasiswa", []);
    }

    public function ruang()
    {
        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/ruang", []);
    }
    public function jadwal()
    {
        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/jadwal", []);
    }
    public function dosen()
    {
        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/dosen", []);
    }
    public function booking()
    {
        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/booking", []);
    }
    public function report()
    {
        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/report", []);
    }
    public function pdf()
    {
        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/pdf", []);
    }
}

<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\Request;
use TugasBesar\BookingClass2g\App\View;
use TugasBesar\BookingClass2g\Models\Dosen;
use TugasBesar\BookingClass2g\Models\Mahasiswa;
use TugasBesar\BookingClass2g\Models\Ruang;

class HomeController
{
    public function home()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $ruang = new Ruang();
        $totalPage = $ruang->getTotalPage();
        if (isset($_SESSION['user'])) {
            
            $username = $_SESSION['user'];
            $level = $_SESSION['level'];
            if ($level == 'mahasiswa') {
                $user = new Mahasiswa();
                $user = $user->find($username, 'nim');
            } else {
                $user = new Dosen();
                $user = $user->find($username, 'nip');
            }
        }else{
            $level = "";
            $user = "";
        }
        View::render("Templates/header", ['title' => 'Home', 'level' => $level, 'user' => $user]);
        View::render("Home/home", ['totalPage' => $totalPage]);
        View::render("Templates/footer", []);
    }

    public function booking(): void
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $ruang = new Ruang();
        $totalPage = $ruang->getTotalPage();
        if (isset($_SESSION['user'])) {
            
            $username = $_SESSION['user'];
            $level = $_SESSION['level'];
            if ($level == 'mahasiswa') {
                $user = new Mahasiswa();
                $user = $user->find($username, 'nim');
            } else {
                $user = new Dosen();
                $user = $user->find($username, 'nip');
            }
        }else{
            $level = "";
            $user = "";
        }
        View::render("Templates/header", ['title' => 'Booking', 'level' => $level, 'user' => $user]);
        View::render("Home/booking", []);
        View::render("Templates/footer", []);
    }

    public function roomSchedule($id): void
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $ruang = new Ruang();
        $totalPage = $ruang->getTotalPage();
        if (isset($_SESSION['user'])) {
            
            $username = $_SESSION['user'];
            $level = $_SESSION['level'];
            if ($level == 'mahasiswa') {
                $user = new Mahasiswa();
                $user = $user->find($username, 'nim');
            } else {
                $user = new Dosen();
                $user = $user->find($username, 'nip');
            }
        }else{
            $level = "";
            $user = "";
        }
        View::render("Templates/header", ['title' => 'Room Schedule', 'level' => $level, 'user' => $user]);
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

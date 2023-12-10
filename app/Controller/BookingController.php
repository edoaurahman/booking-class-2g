<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\Request;
use TugasBesar\BookingClass2g\App\View;
use TugasBesar\BookingClass2g\Models\Booking;
use TugasBesar\BookingClass2g\Models\Dosen;
use TugasBesar\BookingClass2g\Models\Mahasiswa;
use TugasBesar\BookingClass2g\Models\Ruang;

class BookingController extends Controller
{
    private function _getUser(): array
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['user'])) {

            $username = $_SESSION['user'];
            $level = $_SESSION['level'];
            if ($level == 'mahasiswa') {
                $user = new Mahasiswa();
                $user = $user->find($username, 'nim');
                $booking = new Booking();
                $notification = $booking->getNotification($level, $user);
            } else {
                $user = new Dosen();
                $user = $user->find($username, 'nip');
                $booking = new Booking();
                $notification = $booking->getNotification($level, $user);
            }
        } else {
            $level = "";
            $user = "";
            $notification = "";
        }
        return ['level' => $level, 'user' => $user, 'notification' => $notification];
    }

    public function booking(): void
    {
        $data = $this->_getUser();
        extract($data);
        View::render("Templates/header", ['title' => 'Booking', 'level' => $level, 'user' => $user, 'notification' => $notification]);
        View::render("Home/booking", []);
        View::render("Templates/footer", []);
    }

    public function detailBooking(string $id_ruang): void
    {
        $data = $this->_getUser();
        extract($data);

        $ruang = new Ruang();
        $ruang = $ruang->getDetailRuang($id_ruang);
        // $this->ddd($ruang);

        View::render("Templates/header", ['title' => 'Booking', 'level' => $level, 'user' => $user, 'notification' => $notification]);
        View::render("Home/detail-booking", ['ruang' => $ruang]);
        View::render("Templates/footer", []);
    }

    public function isiFormBooking(Request $request): void
    {
        $data = $this->_getUser();
        extract($data);
        View::render("Templates/header", ['title' => 'Booking', 'level' => $level, 'user' => $user, "notification" => $notification]);
        View::render("Home/formulir-checkout", []);
        View::render("Templates/footer", []);
    }

    public function reviewBooking(): void
    {
        $data = $this->_getUser();
        extract($data);
        View::render("Templates/header", ['title' => 'Booking', 'level' => $level, 'user' => $user, "notification" => $notification]);
        View::render("Home/review", []);
        View::render("Templates/footer", []);
    }


    public function apiRuangBooking(Request $request): void
    {
        $fmt = new \IntlDateFormatter('id_ID', 0, 0, 'Asia/Jakarta', 0, 'EEEE');
        $hari = $fmt->format(new \DateTime($request->tanggal));
        $ruang = new Ruang();

        $data = $ruang->getRuang($hari, $request->jam_mulai, $request->jam_selesai, $request->id_lantai, $request->id_jenis_ruang, $request->search);
        echo json_encode($data);
    }

    public function apiStatusRuang(string $id_ruang): void
    {
        $ruang = new Ruang();
        $data = $ruang->getStatusRuangPerDay($id_ruang);
        echo json_encode($data);
    }
}

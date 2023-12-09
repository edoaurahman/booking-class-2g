<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\Request;
use TugasBesar\BookingClass2g\App\View;
use TugasBesar\BookingClass2g\Models\Booking;
use TugasBesar\BookingClass2g\Models\Dosen;
use TugasBesar\BookingClass2g\Models\Jadwal;
use TugasBesar\BookingClass2g\Models\Mahasiswa;
use TugasBesar\BookingClass2g\Models\Ruang;

class HomeController extends Controller
{
    private function getUser(): array
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

    public function home(): void
    {
        $ruang = new Ruang();
        $totalPage = $ruang->getTotalPage();
        $data = $this->getUser();
        extract($data);
        // $this->ddd($notification);
        View::render("Templates/header", ['title' => 'Home', 'level' => $level, 'user' => $user, 'notification' => $notification]);
        View::render("Home/home", ['totalPage' => $totalPage]);
        View::render("Templates/footer", []);
    }

    public function booking(): void
    {
        $data = $this->getUser();
        extract($data);
        View::render("Templates/header", ['title' => 'Booking', 'level' => $level, 'user' => $user, 'notification' => $notification]);
        View::render("Home/booking", []);
        View::render("Templates/footer", []);
    }
    public function detail_booking(): void
    {
        $data = $this->getUser();
        extract($data);
        View::render("Templates/header", ['title' => 'Room Schedule', 'level' => $level, 'user' => $user, 'notification' => $notification]);
        View::render("Home/detail-booking", []);
        View::render("Templates/footer", []);
    }

    public function roomSchedule($id): void
    {
        $data = $this->getUser();
        extract($data);

        $ruang = new Ruang();
        $ruang = $ruang->all();
        $fmt = new \IntlDateFormatter('id_ID', 0, 0, 'Asia/Jakarta', 0, 'EEEE');
        // $fmt->setPattern('EEEE');
        $hari = $fmt->format(new \DateTime());
        $jadwal = new Jadwal();
        $jadwal = $jadwal->getJadwal($id, $hari);
        View::render("Templates/header", ['title' => 'Room Schedule', 'level' => $level, 'user' => $user, 'notification' => $notification]);
        View::render("Home/roomSchedule", ['ruang' => $ruang, 'id' => $id, 'jadwal' => $jadwal]);
        View::render("Templates/footer", []);
    }
    public function isiForm(): void

    {
        $data = $this->getUser();
        extract($data);
        View::render("Templates/header", ['title' => 'Booking', 'level' => $level, 'user' => $user, "notification" => $notification]);
        View::render("Home/formulir-checkout", []);
        View::render("Templates/footer", []);
    }

    public function review(): void

    {
        $data = $this->getUser();
        extract($data);
        View::render("Templates/header", ['title' => 'Booking', 'level' => $level, 'user' => $user, "notification" => $notification]);
        View::render("Home/review", []);
        View::render("Templates/footer", []);
    }


    public function apiRuang($page): void
    {
        $ruang = new Ruang();
        $ruangan = $ruang->getRuangPaggination($page);
        $data = [
            'ruangan' => $ruangan,
            'currentPage' => $page,
        ];
        echo json_encode($data);
    }

    public function apiJadwal($id, $hari): void
    {
        $jadwal = new Jadwal();
        $jadwal = $jadwal->getJadwal($id, $hari);
        echo json_encode($jadwal);
    }

    public function apiRuangBooking(Request $request): void
    {
        $fmt = new \IntlDateFormatter('id_ID', 0, 0, 'Asia/Jakarta', 0, 'EEEE');
        $hari = $fmt->format(new \DateTime($request->tanggal));
        $ruang = new Ruang();

        $data = $ruang->getRuang($hari, $request->jam_mulai, $request->jam_selesai, $request->id_lantai, $request->id_jenis_ruang, $request->search);
        echo json_encode($data);
    }
}

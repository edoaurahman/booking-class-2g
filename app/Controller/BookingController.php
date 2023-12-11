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
        if ($level == 'mahasiswa') {
            $data_user = new Mahasiswa();
            $data_user = $data_user->getDetailMahasiswa($user->nim);
        } else {
            $data_user = new Dosen();
            $data_user = $data_user->getDetailDosen($user->nip);
        }
        $listJam = [
            'J001' => '1',
            'J002' => '2',
            'J003' => '3',
            'J004' => '4',
            'J005' => '5',
            'J006' => '6',
            'J007' => '7',
            'J008' => '8',
            'J009' => '9',
            'J010' => '10',
            'J011' => '11',
        ];
        $dosen = new Dosen();
        $listDosen = $dosen->all();
        $formatter = new \IntlDateFormatter('id_ID', \IntlDateFormatter::NONE, \IntlDateFormatter::NONE);
        $formatter->setPattern('dd MMMM yyyy');
        $tanggal = $formatter->format(strtotime($request->tanggal));
        $jam_mulai = $listJam[$request->jam_mulai];
        $jam_selesai = $listJam[$request->jam_selesai];
        $bookingAvailability = new Dosen();
        $bookingAvailability = $bookingAvailability->checkBookingAvailability($request->tanggal, $request->id_ruang, $request->jam_mulai, $request->jam_selesai);
        // $this->ddd($bookingAvailability);
        // $this->ddd($data_user);
        View::render("Templates/header", ['title' => 'Booking', 'level' => $level, 'user' => $user, "notification" => $notification]);
        View::render("Home/formulir-checkout", ['level' => $level, 'user' => $data_user, 'tanggal' => $tanggal, 'jam_mulai' => $jam_mulai, 'jam_selesai' => $jam_selesai, 'id_ruang' => $request->id_ruang, 'bookingAvailability' => $bookingAvailability, 'request' => $request, 'listDosen' => $listDosen]);
        View::render("Templates/footer", []);
    }

    public function reviewBooking(Request $request): void
    {
        $data = $this->_getUser();
        extract($data);
        // $this->ddd($request);
        View::render("Templates/header", ['title' => 'Booking', 'level' => $level, 'user' => $user, "notification" => $notification]);
        View::render("Home/review", ['request' => $request]);
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

    public function apiGetDosen(): void
    {
        $dosen = new Dosen();
        $data = $dosen->all();
        echo json_encode($data);
    }
}

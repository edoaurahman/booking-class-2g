<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\Request;
use TugasBesar\BookingClass2g\App\View;
use TugasBesar\BookingClass2g\Models\Booking;
use TugasBesar\BookingClass2g\Models\Dosen;
use TugasBesar\BookingClass2g\Models\Kelas;
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
        View::render("Booking/booking", []);
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
        View::render("Booking/detail-booking", ['ruang' => $ruang]);
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
        $kelas = new Kelas();
        $listDosen = $dosen->all();
        $listKelas = $kelas->all();
        $formatter = new \IntlDateFormatter('id_ID', \IntlDateFormatter::NONE, \IntlDateFormatter::NONE);
        $formatter->setPattern('dd MMMM yyyy');
        $tanggal = $formatter->format(strtotime($request->tanggal));
        $jam_mulai = $listJam[$request->jam_mulai];
        $jam_selesai = $listJam[$request->jam_selesai];
        $bookingAvailability = new Dosen();
        $bookingAvailability = $bookingAvailability->checkBookingAvailability($request->tanggal, $request->id_ruang, $request->jam_mulai, $request->jam_selesai);
        if (empty($bookingAvailability)) {
            $bookingAvailability = new Dosen();
            $bookingAvailability = $bookingAvailability->checkJadwalAvailability($request->tanggal, $request->id_ruang, $request->jam_mulai, $request->jam_selesai);
            // $this->ddd($bookingAvailability);
        }
        // $this->ddd($bookingAvailability);
        $status = '';
        if (!empty($bookingAvailability)) {
            $status = 'urgent';
        } else {
            if ($level == 'mahasiswa') {
                $status = 'waiting_dosen_verification';
            } else {
                $status = 'onprocess';
            }
        }
        // $this->ddd($status);
        // $this->ddd($data_user);
        View::render("Templates/header", ['title' => 'Booking', 'level' => $level, 'user' => $user, "notification" => $notification]);
        View::render("Booking/formulir-checkout", [
            'level' => $level,
            'user' => $data_user,
            'tanggal' => $tanggal,
            'jam_mulai' => $jam_mulai,
            'jam_selesai' => $jam_selesai,
            'id_ruang' => $request->id_ruang,
            'bookingAvailability' => $bookingAvailability,
            'request' => $request,
            'listDosen' => $listDosen,
            'listKelas' => $listKelas,
            'status' => $status
        ]);
        View::render("Templates/footer", []);
    }

    public function reviewBooking(Request $request): void
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
        $dosen_penanggung_jawab = new Dosen();
        $dosen_penanggung_jawab = $dosen_penanggung_jawab->find($request->id_dosen, 'nip');
        $ruang = new Ruang();
        $ruang = $ruang->getDetailRuang($request->id_ruang);
        $formatter = new \IntlDateFormatter('id_ID', \IntlDateFormatter::NONE, \IntlDateFormatter::NONE);
        $formatter->setPattern('dd MMMM yyyy');
        $tanggal = $formatter->format(strtotime($request->tanggal));
        $jam_mulai = $listJam[$request->jam_mulai];
        $jam_selesai = $listJam[$request->jam_selesai];
        // $this->ddd($_COOKIE['lampiran']);

        // upload lampiran
        $lampiran = $request->lampiran;
        $file = '';
        if (empty($lampiran['name'])) {
            $lampiran = null;
        } else {
            if (isset($_COOKIE['lampiran'])) {
                // delete old file
                $oldFile = __DIR__ . '/../../public/assets/lampiran/' . $_COOKIE['lampiran'];
                unlink($oldFile);
                // delete cookie
                setcookie('lampiran', '', time() - 3600, '/');
            }
            $extension = pathinfo($lampiran['name'], PATHINFO_EXTENSION);
            $uploadDir = '/assets/lampiran/';
            $filename = uniqid() . '.' . $extension;
            $uploadPath = __DIR__ . '/../../public' . $uploadDir . $filename;

            // $this->ddd($uploadPath);
            move_uploaded_file($_FILES['lampiran']['tmp_name'], $uploadPath);
            // set lampiran to cookie
            setcookie('lampiran', $filename, time() + 86400, '/');
            $file = $filename;
        }

        View::render("Templates/header", ['title' => 'Booking', 'level' => $level, 'user' => $user, "notification" => $notification]);
        View::render("Booking/review", [
            'request' => $request,
            'user' => $data_user,
            'level' => $level,
            'dosen_penanggung_jawab' => $dosen_penanggung_jawab,
            'ruang' => $ruang,
            'tanggal' => $tanggal,
            'jam_mulai' => $jam_mulai,
            'jam_selesai' => $jam_selesai,
            'lampiran' => $file
        ]);
        View::render("Templates/footer", []);
    }

    public function dosenVerification(Request $request): void
    {
        $booking = new Booking();
        $booking->dosenVerif($request->id_booking, $request->status);
        $this->redirect('/');
    }

    public function apiStoreBooking(Request $request): void
    {
        $booking = new Booking();
        $result = $booking->create($request);
        if ($result) {
            http_response_code(200);
            echo json_encode(['status' => $result]);
        } else {
            if (isset($_COOKIE['lampiran'])) {
                // delete old file
                $oldFile = __DIR__ . '/../../public/assets/lampiran/' . $_COOKIE['lampiran'];
                unlink($oldFile);
            }
            http_response_code(500);
            echo json_encode(['status' => $result]);
        }
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

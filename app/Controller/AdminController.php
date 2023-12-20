<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\Request;
use TugasBesar\BookingClass2g\App\View;
use TugasBesar\BookingClass2g\Models\Booking;
use TugasBesar\BookingClass2g\Models\Laporan;
use TugasBesar\BookingClass2g\Models\Mahasiswa;
use TugasBesar\BookingClass2g\Models\MataKuliah;
use TugasBesar\BookingClass2g\Models\Ruang;
use TugasBesar\BookingClass2g\Models\Dosen;
use TugasBesar\BookingClass2g\Models\Hari;
use TugasBesar\BookingClass2g\Models\Jadwal;
use TugasBesar\BookingClass2g\Models\Kelas;

class AdminController extends Controller
{
    public function dashboard()
    {
        $booking = new Booking();
        $totBookHistory = $booking->getAllBookHistory();

        $dosen = new Dosen();
        $totalDosen = $dosen->totalDosen();

        $mahasiswa = new Mahasiswa();
        $totalMahasiswa = $mahasiswa->totalMahasiswa();

        $ruang = new Ruang();
        $totRuang = $ruang->getTotalRuangByIdJenis();
        // $this->ddd($totBookHistory);

        //semua data yang diperlukan di dashboard
        $data = [
            //total data history jam untuk 
            'totAvailable' => $totBookHistory[0],
            'totUsed' => $totBookHistory[1],
            'totDone' => $totBookHistory[2],
            'totUnavailable' => $totBookHistory[3],

            //graph dosen dan mahasiswa
            'totalDosen' => $totalDosen,
            'totalMahasiswa' => $totalMahasiswa,

            //Perbandingan jumlah kelas
            'totRTeori' => $totRuang['counter'][0],
            'totRPraktik' => $totRuang['counter'][1],
            'totRCampuran' => $totRuang['counter'][2],
            'persenTeori' => $totRuang['percentage'][0],
            'persenPraktik' => $totRuang['percentage'][1],
            'persenCampuran' => $totRuang['percentage'][2]

        ];

        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/dashboard", ['data' => $data]);
    }


    public function ruang()
    {
        $ruang = new Ruang();
        $totalPage = $ruang->getTotalPage();

        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/ruang", ['totalPage' => $totalPage]);
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

    public function storeRuang(Request $request)
    {
        $kode_ruang = $request->kode_ruang;
        $nama = $request->nama;
        $jenis_ruang = $request->jenis_ruang;
        $lantai = $request->lantai;
        $keterangan = $request->keterangan;
        $gambar = $request->gambar;
        // $this->ddd($request->gambar['tmp_name']);
        // move file gambar ke dalam folder assets/img/lantai

        $extension = pathinfo($gambar['name'], PATHINFO_EXTENSION);
        $uploadDir = '/assets/img/lantai/';
        $gambar = uniqid() . '.' . $extension;
        $uploadPath = __DIR__ . '/../../public' . $uploadDir . $gambar;

        // $this->ddd($uploadPath);
        move_uploaded_file($request->gambar['tmp_name'], $uploadPath);

        $ruang = new Ruang();
        $ruang->addRuang($kode_ruang, $nama, $jenis_ruang, $lantai, $keterangan, $gambar);

        $this->redirect("/admin/ruang");
    }

    public function editRuang(Request $request)
    {
        $id = $request->id_ruang;
        $kode_ruang = $request->kode_ruang;
        $nama = $request->nama;
        $jenis_ruang = $request->jenis_ruang;
        $lantai = $request->lantai;
        $keterangan = $request->keterangan;
        $gambar = $request->gambar;


        // get prev image
        $ruang = new Ruang();
        $gambarPrev = $ruang->getRuangByID($id);
        $gambarPrev = $gambarPrev->gambar;
        // $this->ddd(empty($gambar["name"]));
        // Check if a new image is uploaded
        if (!empty($gambar["name"])) {
            // Move the new file to the destination folder
            $extension = pathinfo($gambar['name'], PATHINFO_EXTENSION);
            $uploadDir = '/assets/img/lantai/';
            $newImage = uniqid() . '.' . $extension;
            $uploadPath = __DIR__ . '/../../public' . $uploadDir . $newImage;


            move_uploaded_file($request->gambar['tmp_name'], $uploadPath);

            // Check if the current image exists and delete it
            if ($gambarPrev !== null && file_exists(__DIR__ . '/../../public' . $uploadDir . $gambarPrev)) {
                unlink(__DIR__ . '/../../public' . $uploadDir . $gambarPrev);
            }

            // Update the database with the new image file name
            $ruang->editRuang($id, $kode_ruang, $nama, $jenis_ruang, $lantai, $keterangan, $newImage);
        } else {
            // No new image uploaded, update the database without changing the image file name
            $ruang->editRuang($id, $kode_ruang, $nama, $jenis_ruang, $lantai, $keterangan, $gambarPrev);
        }

        $this->redirect("/admin/ruang");
    }

    public function deleteRuang($id_ruang)
    {
        $ruang = new Ruang();

        // delete image from folder
        $gambarPrev = $ruang->getRuangByID($id_ruang);
        $gambarPrev = $gambarPrev->gambar;
        $uploadDir = '/assets/img/lantai/';
        if ($gambarPrev !== null) {
            unlink(__DIR__ . '/../../public' . $uploadDir . $gambarPrev);
        }

        // delete data from database
        $ruang->deleteRuang($id_ruang);

        $this->redirect("/admin/ruang");
    }

    public function mahasiswa()
    {
        $mahasiswa = new Mahasiswa();
        $totalPage = $mahasiswa->getTotalPage();

        $kelas = new Kelas();
        $listKelas = $kelas->all();

        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/mahasiswa", ['totalPage' => $totalPage, 'listKelas' => $listKelas]);
    }

    public function apiMahasiswa($page)
    {
        $mahasiswa = new Mahasiswa();
        $jmlMahasiswa = $mahasiswa->getMahasiswaPagination($page);
        $data = [
            'jmlMahasiswa' => $jmlMahasiswa,
            'currentPage' => $page,
        ];
        echo json_encode($data);
    }

    public function storeMahasiswa(Request $request)
    {
        $nim = $request->nim;
        $nama = $request->nama;
        $password = $request->password;
        $tmpt_lahir = $request->tmptLahir;
        $tgl_lahir = $request->tglLahir;
        $jenis_kelamin = $request->jenis_kelamin;
        $kelas = $request->kelas;

        $mahasiswa = new Mahasiswa();
        $mahasiswa->addMahasiswa($nim, $nama, $password, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $kelas);

        $this->redirect("/admin/mahasiswa");
    }

    public function editMahasiswa(Request $request)
    {
        $nim = $request->nim;
        $nama = $request->nama;
        $password = $request->password;
        $tmpt_lahir = $request->tmptLahir;
        $tgl_lahir = $request->tglLahir;
        $jenis_kelamin = $request->jenis_kelamin;
        $kelas = $request->kelas;

        $mahasiswa = new Mahasiswa();
        $mahasiswa->editMahasiswa($nim, $nama, $password, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $kelas);

        $this->redirect("/admin/mahasiswa");
    }

    public function deleteMahasiswa($nim)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->deleteMahasiswa($nim);

        $this->redirect("/admin/mahasiswa");
    }

    public function jadwal()
    {
        $jadwal = new Jadwal();
        $totalPage = $jadwal->getTotalPage();

        $kelas = new Kelas();
        $listKelas = $kelas->all();

        $matakuliah = new MataKuliah();
        $listMK = $matakuliah->all();

        $dosen = new Dosen();
        $listDosen = $dosen->all();

        $ruang = new Ruang();
        $listRuang = $ruang->all();

        $hari = new Hari();
        $listHari = $hari->all();

        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/jadwal", ['totalPage' => $totalPage, 'listKelas' => $listKelas, 'listMK' => $listMK, 'listDosen' => $listDosen, 'listRuang' => $listRuang, 'listHari' => $listHari]);
    }

    public function apiJadwal($page)
    {
        $jadwal = new Jadwal();
        $jmlJadwal = $jadwal->getJadwalPagination($page);
        $data = [
            'jmlJadwal' => $jmlJadwal,
            'currentPage' => $page,
        ];
        echo json_encode($data);
    }

    public function storeJadwal(Request $request)
    {
        $matakuliah = $request->matakuliah;
        $kelas = $request->kelas;
        $dosen = $request->dosen;
        $ruang = $request->ruang;
        $hari = $request->hari;
        $jam_mulai = $request->jam_mulai;
        $jam_selesai = $request->jam_selesai;


        $jadwal = new Jadwal();
        $jadwal->addJadwal($matakuliah, $kelas, $dosen, $ruang, $hari, $jam_mulai, $jam_selesai);

        $this->redirect("/admin/jadwal");
    }

    public function editJadwal(Request $request)
    {
        $id = $request->id_jadwal;
        $matakuliah = $request->matakuliah;
        $kelas = $request->kelas;
        $dosen = $request->dosen;
        $ruang = $request->ruang;
        $hari = $request->hari;
        $jam_mulai = $request->jam_mulai;
        $jam_selesai = $request->jam_selesai;


        $jadwal = new Jadwal();
        $jadwal->editJadwal($id, $matakuliah, $kelas, $dosen, $ruang, $hari, $jam_mulai, $jam_selesai);

        $this->redirect("/admin/jadwal");
    }

    public function deleteJadwal($id_jadwal)
    {
        $jadwal = new Jadwal();
        $jadwal->deleteJadwal($id_jadwal);

        $this->redirect("/admin/jadwal");
    }

    public function dosen()
    {
        $dosen = new Dosen();
        $totalPage = $dosen->getTotalPage();

        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/dosen", ['totalPage' => $totalPage]);
    }

    public function apiDosen($page)
    {
        $dosen = new Dosen();
        $jmlDosen = $dosen->getDosenPagination($page);
        $data = [
            'jmlDosen' => $jmlDosen,
            'currentPage' => $page,
        ];
        echo json_encode($data);
    }

    public function storeDosen(Request $request)
    {
        $nip = $request->nip;
        $nama = $request->nama;
        $password = $request->password;
        $email = $request->email;
        $tmpt_lahir = $request->tmptLahir;
        $tgl_lahir = $request->tglLahir;
        $jenis_kelamin = $request->jenis_kelamin;

        $dosen = new Dosen();
        $dosen->addDosen($nip, $nama, $password, $jenis_kelamin, $tmpt_lahir, $tgl_lahir, $email);

        $this->redirect("/admin/dosen");
    }

    public function editDosen(Request $request)
    {
        $nip = $request->nip;
        $nama = $request->nama;
        $password = $request->password;
        $email = $request->email;
        $tmpt_lahir = $request->tmptLahir;
        $tgl_lahir = $request->tglLahir;
        $jenis_kelamin = $request->jenis_kelamin;

        $dosen = new Dosen();
        $dosen->editDosen($nip, $nama, $password, $jenis_kelamin, $tmpt_lahir, $tgl_lahir, $email);

        $this->redirect("/admin/dosen");
    }

    public function deleteDosen($nip)
    {
        $dosen = new Dosen();
        $dosen->deleteDosen($nip);

        $this->redirect("/admin/dosen");
    }

    public function booking()
    {
        // cek lampiran\
        if (isset($_COOKIE['lampiran'])) {
            // delete old file
            $oldFile = __DIR__ . '/../../public/assets/lampiran/' . $_COOKIE['lampiran'];
            unlink($oldFile);
            // delete cookie
            setcookie('lampiran', '', time() - 3600, '/');
            unset($_COOKIE['lampiran']);
        }

        $booking = new Booking();
        $totalPage = $booking->getTotalPage();

        $mahasiswa = new Mahasiswa();
        $listNim = $mahasiswa->all();

        $dosen = new Dosen();
        $listDosenPJ = $dosen->all();
        $listDosenPR = $dosen->all();

        $kelas = new Kelas();
        $listKelas = $kelas->all();

        $ruang = new Ruang();
        $listRuang = $ruang->all();

        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/booking", ['totalPage' => $totalPage, 'listNim' => $listNim, 'listDosenPJ' => $listDosenPJ, 'listDosenPR' => $listDosenPR, 'listKelas' => $listKelas, 'listRuang' => $listRuang]);
    }

    public function apiBooking($page)
    {
        $booking = new Booking();
        $jmlBooking = $booking->getBookingPagination($page);
        $data = [
            'jmlBooking' => $jmlBooking,
            'currentPage' => $page,
        ];
        echo json_encode($data);
    }

    public function apiBookingUrgent(): void
    {
        $booking = new Booking();
        $ruangUrgent = $booking->getBookingUrgent();
        $bookingIntersect = [];
        // $this->ddd($ruangUrgent);
        $bookingUrgent = $booking->getDetailBookingUrgent();
        // $this->ddd($bookingUrgent[0]);
        foreach ($ruangUrgent as $key => $item) {
            extract($item);
            if (!empty($booking->getBookingIntersect($date, $id_ruang, $jam_mulai, $jam_selesai))) {
                $bookingIntersect[] = $booking->getBookingIntersect($date, $id_ruang, $jam_mulai, $jam_selesai)[0];
            }
        }
        // $this->ddd($bookingIntersect);
        $data = [
            'bookingIntersect' => $bookingIntersect,
            'bookingUrgent' => $bookingUrgent,
        ];
        echo json_encode($data);
    }

    public function storeBooking(Request $request): void
    {
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
        // $this->ddd($request);
        $booking = new Booking();
        $result = $booking->create($request, $file);
        if ($result) {
            http_response_code(200);
            echo json_encode(['status' => $result]);
        } else {
            if (isset($_COOKIE['lampiran'])) {
                // delete old file
                $oldFile = __DIR__ . '/../../public/assets/lampiran/' . $_COOKIE['lampiran'];
                unlink($oldFile);
                // delete cookie
                setcookie('lampiran', '', time() - 3600, '/');
            }
            http_response_code(500);
            echo json_encode(['status' => $result]);
        }
    }

    public function report()
    {
        $report = new Laporan();
        $totalPage = $report->getTotalPage();

        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/report", ['totalPage' => $totalPage]);
    }

    public function apiReport($page)
    {
        $report = new Laporan();
        $jmlReport = $report->getReportPagination($page);
        $data = [
            'jmlReport' => $jmlReport,
            'currentPage' => $page,
        ];
        echo json_encode($data);
    }

    public function pdf($id_booking)
    {
        $fmt = new \IntlDateFormatter('id_ID', 0, 0, 'Asia/Jakarta', 0, 'EEEE, MM MMMM YYYY');
        $report = new Laporan();
        $report = $report->getReport($id_booking);
        $tanggal_pakai = $fmt->format(new \DateTime($report['tanggal_pakai']));

        // $this->ddd($tanggal_pakai);
        // $this->ddd($report);
        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/pdf", [
            'report' => $report,
            'tanggal_pakai' => $tanggal_pakai
        ]);
    }

    public function print_report($month, $year)
    {
        $report = new Laporan();
        $result = $report->getReportByDate($month, $year);
        // $this->ddd($result);
        View::render("Admin/print_report", [
            'report' => $result
        ]);
    }

    public function adminVerification(Request $request): void
    {
        // $this->ddd($request);
        if ($request->status == 'success') {
            if (!empty("$request->id_booking_urgent")) {
                // $this->ddd($request);
                $booking = new Booking();
                $booking->verifikasiBooking($request->id_booking_urgent, $request->status);
                $booking->verifikasiBooking($request->id_booking, 'canceled');
                $this->redirect('/admin/booking');
                return;
            }
            // $this->ddd($request);
            $booking = new Booking();
            $booking->verifikasiBooking($request->id_booking, $request->status);
            // $this->ddd($request->id_jadwal);
            if ($request->id_jadwal != NULL) {
                $jadwal = new Jadwal();
                $jadwal->setJadwalStatus('online', $request->id_jadwal);
            }
        } else if ($request->status == 'canceled') {
            if (!empty("$request->id_booking_urgent")) {
                // $this->ddd($request);
                $booking = new Booking();
                $booking->verifikasiBooking($request->id_booking_urgent, $request->status);
                $booking->verifikasiBooking($request->id_booking, 'success');
                $this->redirect('/admin/booking');
                return;
            }
            // $this->ddd($request);
            // $this->ddd("canceled");
            $booking = new Booking();
            $booking->verifikasiBooking($request->id_booking, $request->status);
            if ($request->id_jadwal != NULL) {
                $jadwal = new Jadwal();
                $jadwal->setJadwalStatus('offline', $request->id_jadwal);
            }
        } else if ($request->status == 'done') {
            $booking = new Booking();
            $booking->markDone($request->id_booking);
            if ($request->id_jadwal != NULL) {
                $jadwal = new Jadwal();
                $jadwal->setJadwalOffline($request->id_booking);
            }
        }
        $this->redirect('/admin/booking');
    }

    public function apiCheckLastDosen(Request $request): void
    {
        $bookingAvailability = new Dosen();
        $bookingAvailability = $bookingAvailability->checkBookingAvailability($request->tanggal, $request->id_ruang, $request->jam_mulai, $request->jam_selesai);
        if (empty($bookingAvailability)) {
            $bookingAvailability = new Dosen();
            $bookingAvailability = $bookingAvailability->checkJadwalAvailability($request->tanggal, $request->id_ruang, $request->jam_mulai, $request->jam_selesai);
            ;
        }
        echo json_encode($bookingAvailability);
    }

    public function apiBookingSearch(Request $request): void
    {
        $booking = new Booking();
        $booking = $booking->getBookingSearch($request);
        echo json_encode($booking);
    }

    public function apiMahasiswaSearch(Request $request): void
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa = $mahasiswa->getMahasiswaSearch($request);
        echo json_encode($mahasiswa);
    }

    public function apiDosenSearch(Request $request): void
    {
        $dosen = new Dosen();
        $dosen = $dosen->getDosenSearch($request);
        echo json_encode($dosen);
    }

    public function apiRuangSearch(Request $request): void
    {
        $ruang = new Ruang();
        $ruang = $ruang->getRuangSearch($request);
        echo json_encode($ruang);
    }

    public function apiJadwalSearch(Request $request): void
    {
        $jadwal = new Jadwal();
        $jadwal = $jadwal->getJadwalSearch($request);
        echo json_encode($jadwal);
    }

    public function getTotalBookingOnproccess(): void
    {
        $booking = new Booking();
        $booking = $booking->getTotalBookingOnprocess();
        echo json_encode(['total_booking' => $booking]);
    }

    public function apiDashboard1()
    {
        $booking = new Booking();
        $newBook = $booking->getNewestBooking();

        $ruang = new Ruang();
        $topBook = $ruang->getTopBookedRoom();

        $jadwal = new Jadwal();
        $schedule =
            // $this->ddd($newBook);
            $data = [
                'newBook' => $newBook,
                'topBook' => $topBook
            ];

        echo json_encode($data);
    }

    public function apiDashboard2(Request $request): void
    {
        $hari = $request->hari;
        $jadwal = new Jadwal();
        $listJadwal = $jadwal->getSchedule($hari);
        // $this->ddd($listJadwal);
        echo json_encode($listJadwal);
    }

    public function setJadwalStatus(Request $request): void
    {
        $status = $request->status;
        $id_jadwal = $request->id_jadwal;
        $jadwal = new Jadwal();
        $jadwal->setJadwalStatus($status, $id_jadwal);
        // get back user to previous page
        $this->redirect($_SERVER['HTTP_REFERER']);
    }
}

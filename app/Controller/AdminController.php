<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\Request;
use TugasBesar\BookingClass2g\App\View;
use TugasBesar\BookingClass2g\Models\Booking;
use TugasBesar\BookingClass2g\Models\Laporan;
use TugasBesar\BookingClass2g\Models\Mahasiswa;
use TugasBesar\BookingClass2g\Models\Ruang;
use TugasBesar\BookingClass2g\Models\Dosen;
use TugasBesar\BookingClass2g\Models\Jadwal;

class AdminController extends Controller
{
    public function dashboard()
    {
        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/dashboard", []);
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

    public function mahasiswa()
    {
        $mahasiswa = new Mahasiswa();
        $totalPage = $mahasiswa->getTotalPage();

        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/mahasiswa", ['totalPage' => $totalPage]);
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

    public function jadwal()
    {
        $jadwal = new Jadwal();
        $totalPage = $jadwal->getTotalPage();

        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/jadwal", ['totalPage' => $totalPage]);
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
    public function booking()
    {
        $booking = new Booking();
        $totalPage = $booking->getTotalPage();

        View::render("Templates/sidebarAdmin", ["title" => 'Admin']);
        View::render("Admin/booking", ['totalPage' => $totalPage]);
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
}

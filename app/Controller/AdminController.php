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

    public function storeRuang(Request $request)
    {
        $kode_ruang = $request->kode_ruang;
        $nama = $request->nama;
        $jenis_ruang = $request->jenis_ruang;
        $lantai = $request->lantai;
        // $deskripsi_ruang = $request->deskripsi_ruang;

        $ruang = new Ruang();
        $ruang->addRuang($kode_ruang, $nama, $jenis_ruang, $lantai);

        $this->redirect("/admin/ruang");
    }

    public function editRuang(Request $request)
    {
        $id = $request->id_ruang;
        $kode_ruang = $request->kode_ruang;
        $nama = $request->nama;
        $jenis_ruang = $request->jenis_ruang;
        $lantai = $request->lantai;

        $ruang = new Ruang();
        $ruang->editRuang($id, $kode_ruang, $nama, $jenis_ruang, $lantai);

        $this->redirect("/admin/ruang");
    }

    public function ruangModal($id_ruang): void
    {
        $ruang = new Ruang();
        $ruang = $ruang->getRuangByID($id_ruang);

        $id = $ruang->id_ruang;
        $kode_ruang = $ruang->nama_ruang;
        $nama = $ruang->deskripsi_ruang;
        $jenis_ruang = $ruang->jenis_ruang;
        $lantai = $ruang->nama_lantai;

        View::render('Admin/Modal/ruangModal', ['id' => $id, 'nama' => $nama, 'kode_ruang' => $kode_ruang, 'jenis_ruang' => $jenis_ruang, 'lantai' => $lantai]);
    }

    public function deleteRuang($id_ruang)
    {
        $ruang = new Ruang();
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

    public function mahasiswaModal($nim): void
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa = $mahasiswa->getMahasiswaById($nim);

        $nama = $mahasiswa->nama;
        $password = $mahasiswa->password;
        $tempat_lahir = $mahasiswa->tempat_lahir;
        $tanggal_lahir = $mahasiswa->tanggal_lahir;
        $jenis_kelamin = $mahasiswa->jenis_kelamin;
        $id_kelas = $mahasiswa->id_kelas;

        View::render('Admin/Modal/mahasiswaModal', ['id' => $nim, 'nama' => $nama, 'password' => $password, 'tempat_lahir' => $tempat_lahir, 'tanggal_lahir' => $tanggal_lahir, 'jenis_kelamin' => $jenis_kelamin, 'id_kelas' => $id_kelas]);
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

    public function jadwalModal($id_jadwal): void
    {
        $jadwal = new Jadwal();
        $jadwal = $jadwal->getJadwalById($id_jadwal);

        $id = $id_jadwal;
        $matakuliah = $jadwal->id_matkul;
        $kelas = $jadwal->id_kelas;
        $dosen = $jadwal->id_dosen;
        $ruang = $jadwal->id_ruang;
        $hari = $jadwal->id_hari;
        $jam_mulai = $jadwal->jam_mulai;
        $jam_selesai = $jadwal->jam_selesai;
        $id_jam_mulai = $jadwal->id_jam_mulai;
        $id_jam_selesai = $jadwal->id_jam_selesai;

        View::render('Admin/Modal/jadwalModal', ['id' => $id, 'matakuliah' => $matakuliah, 'kelas' => $kelas, 'dosen' => $dosen, 'ruang' => $ruang, 'hari' => $hari, 'jam_mulai' => $jam_mulai, 'jam_selesai' => $jam_selesai, 'id_jam_mulai' => $id_jam_mulai, 'id_jam_selesai' => $id_jam_selesai]);
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

    public function dosenModal($nip): void
    {
        $dosen = new Dosen();
        $dosen = $dosen->getDosenById($nip);

        $nama = $dosen->nama;
        $password = $dosen->password;
        $email = $dosen->email;
        $tempat_lahir = $dosen->tempat_lahir;
        $tanggal_lahir = $dosen->tanggal_lahir;
        $jenis_kelamin = $dosen->jenis_kelamin;

        View::render('Admin/Modal/dosenModal', ['id' => $nip, 'nama' => $nama, 'password' => $password, 'tempat_lahir' => $tempat_lahir, 'tanggal_lahir' => $tanggal_lahir, 'jenis_kelamin' => $jenis_kelamin, 'email' => $email]);
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
        foreach ($ruangUrgent as $item) {
            extract($item);
            $bookingIntersect[] = $booking->getBookingIntersect($date, $id_ruang, $jam_mulai, $jam_selesai);
        }
        $data = [
            'bookingIntersect' => $bookingIntersect,
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

    public function adminVerification(Request $request): void
    {
        $booking = new Booking();
        $booking->verifikasiBooking($request->id_booking, $request->status);
        $this->redirect('/admin/booking');
    }
    
    public function apiCheckLastDosen(Request $request): void
    {
        $bookingAvailability = new Dosen();
        $bookingAvailability = $bookingAvailability->checkBookingAvailability($request->tanggal, $request->id_ruang, $request->jam_mulai, $request->jam_selesai);
        if (empty($bookingAvailability)) {
            $bookingAvailability = new Dosen();
            $bookingAvailability = $bookingAvailability->checkJadwalAvailability($request->tanggal, $request->id_ruang, $request->jam_mulai, $request->jam_selesai);;
        }
        echo json_encode($bookingAvailability);
    }
    
    public function apiBookingSearch(Request $request): void
    {
        $booking = new Booking();
        $booking = $booking->getBookingSearch($request);
        echo json_encode($booking);
    }
}

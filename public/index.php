<?php
$env = parse_ini_file(__DIR__ . '/../.env');
if ($env['ENVIRONMENT'] == 'development') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // Prevent caching
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
} elseif ($env['ENVIRONMENT'] == 'production') {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}

require_once __DIR__ . '/../vendor/autoload.php';

use TugasBesar\BookingClass2g\App\Router;
use TugasBesar\BookingClass2g\Controller\AuthController;
use TugasBesar\BookingClass2g\Controller\HomeController;
use TugasBesar\BookingClass2g\Middleware\AuthMiddleware;
use TugasBesar\BookingClass2g\Controller\AdminController;
use TugasBesar\BookingClass2g\Controller\BookingController;
use TugasBesar\BookingClass2g\Controller\ModalController;
// Auth
Router::add('GET', '/login', AuthController::class, 'login');
Router::add('POST', '/login', AuthController::class, 'prosesLogin');
Router::add('POST', '/signout', AuthController::class, 'signout');
Router::add('POST', '/admin/signout', AuthController::class, 'adminSignout');
// Home
Router::add('GET', '/', HomeController::class, 'home', [AuthMiddleware::class]);
Router::add('GET', '/roomSchedule/{id}', HomeController::class, 'roomSchedule', [AuthMiddleware::class]);
// Booking
Router::add('GET', '/booking', BookingController::class, 'booking', [AuthMiddleware::class]);
Router::add('GET', '/detail-booking/{id_ruang}', BookingController::class, 'detailBooking', [AuthMiddleware::class]);
Router::add('POST', '/isi-formulir', BookingController::class, 'isiFormBooking', [AuthMiddleware::class]);
Router::add('POST', '/review', BookingController::class, 'reviewBooking', [AuthMiddleware::class]);
Router::add('POST', '/booking/dosen/verificaton', BookingController::class, 'dosenVerification', [AuthMiddleware::class]);
Router::add('POST', '/booking/mark/done', BookingController::class, 'markDone', [AuthMiddleware::class]);
// Admin
Router::add('GET', '/admin', AdminController::class, 'dashboard', [AuthMiddleware::class]);
Router::add('GET', '/admin/login', AuthController::class, 'login');
Router::add('POST', '/admin/login', AuthController::class, 'adminLogin');
Router::add('GET', '/admin/ruang', AdminController::class, 'ruang', [AuthMiddleware::class]);
Router::add('POST', '/admin/ruang', AdminController::class, 'storeRuang', [AuthMiddleware::class]);
Router::add('GET', '/admin/ruang/edit/{id_ruang}', AdminController::class, 'ruangModal');
Router::add('POST', '/admin/ruang/edit', AdminController::class, 'editRuang');
Router::add('GET', '/admin/ruang/delete/{id_ruang}', AdminController::class, 'deleteRuang', [AuthMiddleware::class]);
Router::add('GET', '/admin/mahasiswa', AdminController::class, 'mahasiswa', [AuthMiddleware::class]);
Router::add('POST', '/admin/mahasiswa', AdminController::class, 'storeMahasiswa', [AuthMiddleware::class]);
Router::add('GET', '/admin/mahasiswa/edit/{nim}', AdminController::class, 'mahasiswaModal');
Router::add('POST', '/admin/mahasiswa/edit', AdminController::class, 'editMahasiswa');
Router::add('GET', '/admin/mahasiswa/delete/{nim}', AdminController::class, 'deleteMahasiswa', [AuthMiddleware::class]);
Router::add('GET', '/admin/dosen', AdminController::class, 'dosen', [AuthMiddleware::class]);
Router::add('POST', '/admin/dosen', AdminController::class, 'storeDosen', [AuthMiddleware::class]);
Router::add('GET', '/admin/dosen/edit/{nip}', AdminController::class, 'dosenModal');
Router::add('POST', '/admin/dosen/edit', AdminController::class, 'editDosen');
Router::add('GET', '/admin/dosen/delete/{nip}', AdminController::class, 'deleteDosen', [AuthMiddleware::class]);
Router::add('GET', '/admin/jadwal', AdminController::class, 'jadwal', [AuthMiddleware::class]);
Router::add('POST', '/admin/jadwal', AdminController::class, 'storeJadwal', [AuthMiddleware::class]);
Router::add('GET', '/admin/jadwal/edit/{id_jadwal}', AdminController::class, 'jadwalModal');
Router::add('POST', '/admin/jadwal/edit', AdminController::class, 'editJadwal');
Router::add('GET', '/admin/jadwal/delete/{id_jadwal}', AdminController::class, 'deleteJadwal', [AuthMiddleware::class]);
Router::add('GET', '/admin/booking', AdminController::class, 'booking', [AuthMiddleware::class]);
Router::add('POST', '/admin/booking', AdminController::class, 'storeBooking', [AuthMiddleware::class]);
Router::add('GET', '/admin/report', AdminController::class, 'report', [AuthMiddleware::class]);
Router::add('GET', '/admin/pdf/{id_booking}', AdminController::class, 'pdf', [AuthMiddleware::class]);
Router::add('POST', '/admin/booking/verif', AdminController::class, 'adminVerification', [AuthMiddleware::class]);

// API
Router::add('GET', '/api/jadwal/{id}/hari/{hari}', HomeController::class, 'apiJadwal');
Router::add('GET', '/api/ruang/{page}', HomeController::class, 'apiRuang');
Router::add('GET', '/api/dosen/{page}', AdminController::class, 'apiDosen');
Router::add('GET', '/api/mahasiswa/{page}', AdminController::class, 'apiMahasiswa');
Router::add('GET', '/api/jadwal/{page}', AdminController::class, 'apiJadwal');
Router::add('GET', '/api/booking/{page}', AdminController::class, 'apiBooking');
Router::add('POST', '/api/admin/booking/search', AdminController::class, 'apiBookingSearch');
Router::add('GET', '/api/report/{page}', AdminController::class, 'apiReport');
Router::add('GET', '/api/dashboard1', AdminController::class, 'apiDashboard1');

// Filter ruang, hari, jam mulai, jam selesai, cateogry ruang, lantai
Router::add('POST', '/api/ruang/filter', BookingController::class, 'apiRuangBooking');
Router::add('GET', '/api/status-ruang/{id_ruang}', BookingController::class, 'apiStatusRuang');
Router::add('GET', '/api/dosen', BookingController::class, 'apiGetDosen');
Router::add('POST', '/api/booking', BookingController::class, 'apiStoreBooking');

Router::add('GET', '/api/admin/booking/urgent', AdminController::class, 'apiBookingUrgent');
Router::add('POST', '/api/admin/booking/check-dosen-last', AdminController::class, 'apiCheckLastDosen');
Router::add('GET', '/api/admin/booking/total-onprocess', AdminController::class, 'getTotalBookingOnproccess');
Router::add('POST', '/api/admin/booking/set-jadwal-status', AdminController::class, 'setJadwalStatus');

Router::run();

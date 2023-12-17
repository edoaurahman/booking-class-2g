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
Router::add('GET', '/admin/mahasiswa', AdminController::class, 'mahasiswa', [AuthMiddleware::class]);
Router::add('POST', '/admin/mahasiswa', AdminController::class, 'storeMahasiswa', [AuthMiddleware::class]);
Router::add('GET', '/admin/dosen', AdminController::class, 'dosen', [AuthMiddleware::class]);
Router::add('POST', '/admin/dosen', AdminController::class, 'storeDosen', [AuthMiddleware::class]);
Router::add('GET', '/admin/jadwal', AdminController::class, 'jadwal', [AuthMiddleware::class]);
Router::add('GET', '/admin/booking', AdminController::class, 'booking', [AuthMiddleware::class]);
Router::add('GET', '/admin/report', AdminController::class, 'report', [AuthMiddleware::class]);
Router::add('GET', '/admin/pdf/{id_booking}', AdminController::class, 'pdf', [AuthMiddleware::class]);

// API
Router::add('GET', '/api/jadwal/{id}/hari/{hari}', HomeController::class, 'apiJadwal');
Router::add('GET', '/api/ruang/{page}', HomeController::class, 'apiRuang');
Router::add('GET', '/api/dosen/{page}', AdminController::class, 'apiDosen');
Router::add('GET', '/api/mahasiswa/{page}', AdminController::class, 'apiMahasiswa');
Router::add('GET', '/api/jadwal/{page}', AdminController::class, 'apiJadwal');
Router::add('GET', '/api/booking/{page}', AdminController::class, 'apiBooking');
Router::add('GET', '/api/report/{page}', AdminController::class, 'apiReport');

// Filter ruang, hari, jam mulai, jam selesai, cateogry ruang, lantai
Router::add('POST', '/api/ruang/filter', BookingController::class, 'apiRuangBooking');
Router::add('GET', '/api/status-ruang/{id_ruang}', BookingController::class, 'apiStatusRuang');
Router::add('GET', '/api/dosen', BookingController::class, 'apiGetDosen');
Router::add('POST', '/api/booking', BookingController::class, 'apiStoreBooking');



// contoh modal edit
Router::add('GET', '/modal', ModalController::class, 'index');
Router::add('GET', '/modal/edit/{id}', ModalController::class, 'modal');
Router::run();

<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\Request;
use TugasBesar\BookingClass2g\App\View;
use TugasBesar\BookingClass2g\Models\Admin;
use TugasBesar\BookingClass2g\Models\Dosen;
use TugasBesar\BookingClass2g\Models\Mahasiswa;

class AuthController extends Controller
{
    public function login()
    {
        session_start();
        if (isset($_SESSION['user']) && isset($_SESSION['level']) && $_SESSION['level'] == 'admin') {
            $this->redirect('/admin');
        } elseif (isset($_SESSION['user']) && isset($_SESSION['level']) && $_SESSION['level'] == 'mahasiswa') {
            $this->redirect('/');
        }
        $path = $_SERVER['REQUEST_URI'];
        if ($path == '/admin/login') {
            $level = 'admin';
        } else {
            $level = 'user';
        }
        View::render("Auth/login", ['level' => $level]);
    }

    public function prosesLogin(Request $request): void
    {
        session_start();
        $username = $request->username;
        $password = $request->password;


        if (strlen($username) < 18) {
            // print to console
            // echo "<script>console.log('Debug Objects: " . $username . "' );</script>";
            $user = new Mahasiswa();
            $user = $user->find($username, 'nim');
            if (!empty($user->nim)) {
                if ($password === $user->password) {
                    $_SESSION['user'] = $user->nim;
                    $_SESSION['level'] = "mahasiswa";

                    if (isset($_SESSION['next_path'])) {
                        header('Location: ' . $_SESSION['next_path']);
                        unset($_SESSION['next_path']);
                    } else {
                        $this->redirect('/');
                    }
                } else {
                    View::render("Auth/login", [
                        'error' => 'NIM/NIP dan Password tidak sesuai',
                        'username' => $username,
                        'level' => 'user'
                    ]);
                }
            } else {
                View::render("Auth/login", [
                    'error' => 'NIM/NIP dan Password tidak sesuai',
                    'username' => $username,
                    'level' => 'user'
                ]);
            }
        } else {
            $user = new Dosen();
            $user = $user->find($username, 'nip');
            if (!empty($user->nip)) {
                if ($password === $user->password) {
                    $_SESSION['user'] = $user->nip;
                    $_SESSION['level'] = "dosen";

                    if (isset($_SESSION['next_path'])) {
                        header('Location: ' . $_SESSION['next_path']);
                        unset($_SESSION['next_path']);
                    } else {
                        $this->redirect('/');
                    }
                } else {
                    View::render("Auth/login", [
                        'error' => 'NIM/NIP dan Password tidak sesuai',
                        'level' => 'user',
                        'username' => $username,
                    ]);
                }
            } else {
                View::render("Auth/login", [
                    'error' => 'NIM/NIP dan Password tidak sesuai',
                    'level' => 'user',
                    'username' => $username,
                ]);
            }
        }
    }

    public function adminLogin(Request $request): void
    {
        session_start();
        $username = $request->username;
        $password = $request->password;
        $user = new Admin();
        $user = $user->find($username, 'username');
        if (!empty($user->username)) {
            if ($password === $user->password) {
                session_start();
                $_SESSION['user'] = $user->username;
                $_SESSION['level'] = "admin";

                if (isset($_SESSION['next_path'])) {
                    header('Location: ' . $_SESSION['next_path']);
                    unset($_SESSION['next_path']);
                } else {
                    $this->redirect('/admin/login');
                }
            } else {
                View::render("Auth/login", [
                    'error' => 'Username dan Password tidak sesuai',
                    'username' => $username,
                    'level' => 'admin'
                ]);
            }
        } else {
            View::render("Auth/login", [
                'error' => 'Username dan Password tidak sesuai',
                'username' => $username,
                'level' => 'admin'
            ]);
        }
    }

    public function signout(): void
    {
        session_start();
        session_destroy();
        $this->redirect('/login');
    }

    public function adminSignout(): void
    {
        session_start();
        session_destroy();
        $this->redirect('/admin/login');
    }
}

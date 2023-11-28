<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\Request;
use TugasBesar\BookingClass2g\App\View;
use TugasBesar\BookingClass2g\Models\Admin;
use TugasBesar\BookingClass2g\Models\Dosen;
use TugasBesar\BookingClass2g\Models\Mahasiswa;

class AuthController
{
    public function login()
    {
        session_start();
        if (isset($_SESSION['user'])) {
            header('Location: /');
        }
        View::render("Auth/login", []);
    }

    public function prosesLogin(Request $request): void
    {
        $username = $request->username;
        $password = $request->password;

        if (isset($_SESSION['next_path']) && $_SESSION['next_path'] == '/admin') {
            $user = new Admin();
            $user = $user->find($username, 'username');
            if ($user->username) {
                if ($password === $user->password) {
                    session_start();
                    $_SESSION['user'] = $user->username;
                    $_SESSION['level'] = "admin";

                    if (isset($_SESSION['next_path'])) {
                        header('Location: ' . $_SESSION['next_path']);
                        unset($_SESSION['next_path']);
                    } else {
                        header('Location: /admin');
                    }
                } else {
                    View::render("Auth/login", [
                        'error' => 'NIM/NIP dan Password tidak sesuai',
                        'username' => $username
                    ]);
                }
            } else {
                View::render("Auth/login", [
                    'error' => 'NIM/NIP dan Password tidak sesuai',
                    'username' => $username
                ]);
            }
        } else {
            if (strlen($username) < 18) {
                // print to console
                // echo "<script>console.log('Debug Objects: " . $username . "' );</script>";
                $user = new Mahasiswa();
                $user = $user->find($username, 'nim');
                if (!empty($user->nim)) {
                    if ($password === $user->password) {
                        session_start();
                        $_SESSION['user'] = $user->nim;
                        $_SESSION['level'] = "mahasiswa";

                        if (isset($_SESSION['next_path'])) {
                            header('Location: ' . $_SESSION['next_path']);
                            unset($_SESSION['next_path']);
                        } else {
                            header('Location: /');
                        }
                    } else {
                        View::render("Auth/login", [
                            'error' => 'NIM/NIP dan Password tidak sesuai',
                            'username' => $username
                        ]);
                    }
                } else {
                    View::render("Auth/login", [
                        'error' => 'NIM/NIP dan Password tidak sesuai',
                        'username' => $username
                    ]);
                }
            } else {
                $user = new Dosen();
                $user = $user->find($username, 'nip');
                if (!empty($user->nip)) {
                    if ($password === $user->password) {
                        session_start();
                        $_SESSION['user'] = $user->nip;
                        $_SESSION['level'] = "dosen";

                        if (isset($_SESSION['next_path'])) {
                            header('Location: ' . $_SESSION['next_path']);
                            unset($_SESSION['next_path']);
                        } else {
                            header('Location: /');
                        }
                    } else {
                        View::render("Auth/login", [
                            'error' => 'NIM/NIP dan Password tidak sesuai',
                            'username' => $username
                        ]);
                    }
                } else {
                    View::render("Auth/login", [
                        'error' => 'NIM/NIP dan Password tidak sesuai',
                        'username' => $username
                    ]);
                }
            }
        }
    }

    public function signout(): void
    {
        session_start();
        session_destroy();
        header('Location: /login');
    }
}

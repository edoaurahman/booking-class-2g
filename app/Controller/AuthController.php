<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\Request;
use TugasBesar\BookingClass2g\App\View;

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

        if ($username == 'admin' && $password == 'admin') {
            session_start();
            $_SESSION['user'] = $username;
            $_SESSION['level'] = "mahasiswa";
            header('Location: /');
        } else {
            View::render("Auth/login", [
                'error' => 'NIM/NIP dan Password tidak sesuai',
                'username' => $username
            ]);
        }
    }
}

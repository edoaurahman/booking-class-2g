<?php

namespace TugasBesar\BookingClass2g\Middleware;

class AuthMiddleware implements Middleware
{
    public function before(): void
    {
        session_start();
        $path = $_SERVER['REQUEST_URI'];
        $isAdmin = isset($_SESSION['level']) && $_SESSION['level'] == 'admin';
        $isUser = isset($_SESSION['level']) && ($_SESSION['level'] == 'mahasiswa' || $_SESSION['level'] == 'dosen');

        if ($isUser && str_contains($path, '/admin')) {
            $this->redirect('/');
        }

        if (!$isAdmin && str_contains($path, '/admin')) {
            $this->redirect('/admin/login');
        }

        if ($isAdmin && !str_contains($path, '/admin')) {
            $this->redirect('/admin');
        }

        if (!$this->isLoggedIn() && $path !== '/') {
            $redirectPath = $isAdmin ? '/admin/login' : '/login';
            $this->setNextPath($path);
            $this->redirect($redirectPath);
        }
    }


    private function redirect(string $location): void
    {
        header("Location: $location");
        exit();
    }

    private function isLoggedIn(): bool
    {
        return isset($_SESSION['user']);
    }

    private function setNextPath(string $path): void
    {
        $_SESSION['next_path'] = $path;
    }
}

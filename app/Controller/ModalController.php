<?php

namespace TugasBesar\BookingClass2g\Controller;

use TugasBesar\BookingClass2g\App\View;

class ModalController extends Controller
{
    public function index(): void
    {
        View::render('ModalEdit/index', []);
    }

    public function modal($id): void
    {
        View::render('ModalEdit/modal', ['id' => $id]);
    }
}

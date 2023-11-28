<?php

namespace TugasBesar\BookingClass2g\Models;

use TugasBesar\BookingClass2g\Models\Model;

class Admin extends Model
{
    protected $table = 'admin';

    public $id_admin = '';
    public $nama = '';
    public $password = '';
    public $jenis_kelamin = '';
    public $tempat_lahir = '';
    public $tanggal_lahir = '';
}

<?php

namespace TugasBesar\BookingClass2g\Models;

use TugasBesar\BookingClass2g\Models\Model;

class Dosen extends Model
{
    protected $table = 'dosen';

    public $nip = '';
    public $nama = '';
    public $password = '';
    public $jenis_kelamin = '';
    public $tempat_lahir = '';
    public $tanggal_lahir = '';
    public $email = '';
    public $id_matkul = '';
}

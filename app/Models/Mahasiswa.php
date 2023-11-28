<?php

namespace TugasBesar\BookingClass2g\Models;

use TugasBesar\BookingClass2g\Models\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    public $nim = '';
    public $nama = '';
    public $password = '';
    public $tempat_lahir = '';
    public $tanggal_lahir = '';
    public $jenis_kelamin = '';
    public $id_kelas = '';
}

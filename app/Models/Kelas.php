<?php

namespace TugasBesar\BookingClass2g\Models;

use TugasBesar\BookingClass2g\Models\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    public $id_kelas = '';
    public $nama_kelas = '';
    public $id_prodi = '';
    public $id_tingkatan = '';
}

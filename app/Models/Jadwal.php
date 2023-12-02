<?php

namespace TugasBesar\BookingClass2g\Models;

use TugasBesar\BookingClass2g\Models\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    public $id_jadwal = '';
    public $id_matkul = '';
    public $id_kelas = '';
    public $id_dosen = '';
    public $id_ruang = '';
    public $id_hari = '';
    public $jam_mulai = '';
    public $jam_selesai = '';
    public $status = '';

    public function getJadwal($id, $hari): array
    {
        $sql = "SELECT * FROM view_getjadwalkelas where id_ruang = '$id' and nama_hari = '$hari'";
        $result = $this->query($sql);
        return $result;
    }
}

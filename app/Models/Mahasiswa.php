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

    public function getDetailMahasiswa($nim): object
    {
        $sql = "SELECT * FROM mahasiswa INNER JOIN kelas ON mahasiswa.id_kelas = kelas.id_kelas  WHERE nim = ? ";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('s', $nim);
        $stmt->execute();
        return (object) $stmt->get_result()->fetch_assoc();
    }
}

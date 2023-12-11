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

    public function getDetailDosen($nip): object
    {
        $sql = "SELECT * FROM view_getdosen  WHERE nip = '$nip' ";
        $stmt = $this->db->query($sql);
        return (object) $stmt->fetch_assoc();
    }

    public function getDosen(): array
    {
        $sql = "SELECT * FROM view_getdosen";
        $stmt = $this->db->query($sql);
        return $stmt->fetch_all(MYSQLI_ASSOC);
    }

    public function checkBookingAvailability(string $tanggal, string $id_ruang, string $jam_mulai, string $jam_selesai)
    {
        $sql = "CALL CheckBookingAvailability ('$tanggal', '$id_ruang', '$jam_mulai', '$jam_selesai')";
        $stmt = $this->db->query($sql);
        return $stmt->fetch_assoc();
    }
}

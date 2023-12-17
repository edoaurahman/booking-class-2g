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

    public function checkJadwalAvailability(string $tanggal, string $id_ruang, string $jam_mulai, string $jam_selesai)
    {
        $sql = "CALL CheckJadwalAvailability ('$tanggal', '$id_ruang', '$jam_mulai', '$jam_selesai')";
        $stmt = $this->db->query($sql);
        return $stmt->fetch_assoc();
    }

    public function getDosenPagination(string $page): array
    {
        $page -= 1;
        $page *= 10;
        $sql = "SELECT * FROM view_getdosen LIMIT 10 OFFSET $page";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getTotalPage(): int
    {
        $sql = "SELECT COUNT(*) AS total FROM view_getdosen";
        $result = $this->db->query($sql);
        $data = $result->fetch_assoc();
        $total = $data['total'];
        $totalPage = ceil($total / 10);
        return $totalPage;
    }

    public function addDosen($nip, $nama, $password, $jenis_kelamin, $tmpt_lahir, $tgl_lahir, $email): void
    {
        $sql = "CALL addDosen('$nip', '$nama', '$password', '$tmpt_lahir', '$tgl_lahir', '$jenis_kelamin', '$email')";
        $this->exec($sql);
    }
}

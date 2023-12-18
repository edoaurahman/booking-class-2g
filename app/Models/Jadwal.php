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

    public function getJadwalPagination(string $page): array
    {
        $page -= 1;
        $page *= 10;
        $sql = "SELECT * FROM view_getjadwaladmin ORDER BY created_at DESC LIMIT 10 OFFSET $page";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getTotalPage(): int
    {
        $sql = "SELECT COUNT(*) AS total FROM view_getjadwaladmin";
        $result = $this->db->query($sql);
        $data = $result->fetch_assoc();
        $total = $data['total'];
        $totalPage = ceil($total / 10);
        return $totalPage;
    }

    public function addJadwal($matakuliah, $kelas, $dosen, $ruang, $hari, $jam_mulai, $jam_selesai): void {
        $sql = "CALL addJadwal('$matakuliah', '$kelas', '$dosen', '$ruang', '$hari', '$jam_mulai', '$jam_selesai')";
        $this->exec($sql);
    }

    public function getJadwalById($id): object
    {
        $sql = "SELECT * FROM view_getjadwaladmin WHERE id_jadwal = '$id'";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return (object) $data[0];
    }

    public function editJadwal($id, $matakuliah, $kelas, $dosen, $ruang, $hari, $jam_mulai, $jam_selesai) {
        $sql = "CALL editJadwal('$id', '$matakuliah', '$kelas', '$dosen', '$ruang', '$hari', '$jam_mulai', '$jam_selesai')";
        $this->exec($sql);
    }

    public function deleteJadwal($id): void {
        $sql = "DELETE FROM jadwal WHERE id_jadwal = '$id'";
        $this->exec($sql);
    }
}

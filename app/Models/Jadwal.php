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
    public $created_at = '';

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

    public function addJadwal($matakuliah, $kelas, $dosen, $ruang, $hari, $jam_mulai, $jam_selesai): void
    {
        $sql = "CALL addJadwal('$matakuliah', '$kelas', '$dosen', '$ruang', '$hari', '$jam_mulai', '$jam_selesai')";
        $this->exec($sql);
    }

    public function editJadwal($id, $matakuliah, $kelas, $dosen, $ruang, $hari, $jam_mulai, $jam_selesai)
    {
        $sql = "CALL editJadwal('$id', '$matakuliah', '$kelas', '$dosen', '$ruang', '$hari', '$jam_mulai', '$jam_selesai')";
        $this->exec($sql);
    }

    public function deleteJadwal($id): void
    {
        $sql = "DELETE FROM jadwal WHERE id_jadwal = '$id'";
        $this->exec($sql);
    }

    public function getJadwalSearch(object $request): array
    {
        $keyword = $request->keyword;
        $sql = "SELECT * FROM view_getjadwaladmin WHERE kelas LIKE '%$keyword%' OR matkul LIKE '%$keyword%' OR dosen LIKE '%$keyword%' OR ruang LIKE '%$keyword%' OR hari LIKE '%$keyword%' OR jam_mulai LIKE '%$keyword%' OR jam_selesai LIKE '%$keyword%' ORDER BY created_at DESC";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function setJadwalStatus(string $status, string $id_jadwal): bool
    {
        return $this->update(['status' => $status], $id_jadwal, 'id_jadwal');
    }

    public function setJadwalOffline(string $id_booking): void
    {
        $sql = "SELECT * FROM booking WHERE id_booking = '$id_booking'";
        $result = $this->db->query($sql);
        $data = $result->fetch_assoc();
        $date = $data['date'];
        $id_ruang = $data['id_ruang'];
        $jam_mulai = $data['jam_mulai'];
        $jam_selesai = $data['jam_selesai'];
        $sql = "CALL getJadwalOnline('$date','$id_ruang','$jam_mulai','$jam_selesai')";
        $result = $this->db->query($sql);
        $data = $result->fetch_assoc();
        $id_jadwal = $data['id_jadwal'];
        $sql = "UPDATE jadwal SET status = 'offline' WHERE id_jadwal = '$id_jadwal'";
        $this->exec($sql);
    }

    public function getSchedule($hari): array
    {
        $sql = "SELECT * FROM view_getjadwaladmin WHERE hari = '$hari'";
        $result = $this->query($sql);
        return $result;
    }
}

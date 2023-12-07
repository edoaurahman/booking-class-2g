<?php

namespace TugasBesar\BookingClass2g\Models;

use TugasBesar\BookingClass2g\Models\Model;

class Ruang extends Model
{
    protected $table = 'ruang';
    public $id_ruang = '';
    public $nama_ruang = '';
    public $deskripsi_ruang = '';
    public $id_lantai = '';
    public $status_ruang = '';

    public function getRuangAndLantai(): array
    {
        $sql = "SELECT * FROM view_getruang";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getRuangPaggination(string $page): array
    {
        $page -= 1;
        $page *= 10;
        $sql = "SELECT * FROM view_getruang LIMIT 10 OFFSET $page";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getTotalPage(): int
    {
        $sql = "SELECT COUNT(*) AS total FROM view_getruang";
        $result = $this->db->query($sql);
        $data = $result->fetch_assoc();
        $total = $data['total'];
        $totalPage = ceil($total / 10);
        return $totalPage;
    }

    public function getRuang(string $hari, string $jam_mulai, string $jam_selesai, ?array $id_lantai): array
    {
        // Query untuk mendapatkan informasi ruang
        $sql_ruang = "SELECT * FROM ruang";
        if (!empty($id_lantai)) {
            $sql_ruang .= " WHERE id_lantai IN (" . implode(',', $id_lantai) . ")";
        }
        $dataToAppend = print_r($sql_ruang, true) . "\n";
        file_put_contents('log.txt', $dataToAppend, FILE_APPEND);
        $result_ruang = $this->db->query($sql_ruang);
        $data_ruang = [];
        while ($row_ruang = $result_ruang->fetch_assoc()) {
            $data_ruang[] = $row_ruang;
        }

        // Query untuk mendapatkan status booking
        $sql = "SELECT * FROM view_getbookingstatus WHERE nama_hari = '$hari'";
        if (!empty($jam_mulai) && !empty($jam_selesai)) {
            $sql .= " AND id_jam BETWEEN '$jam_mulai' AND '$jam_selesai'";
        }
        if (!empty($id_lantai)) {
            $sql .= " AND id_lantai IN (" . implode(',', $id_lantai) . ")";
        }
        // print $sql to log
        $dataToAppend = print_r($sql, true) . "\n";
        file_put_contents('log.txt', $dataToAppend, FILE_APPEND);

        $result = $this->db->query($sql);
        $data_booking = [];
        while ($row_booking = $result->fetch_assoc()) {
            $data_booking[] = $row_booking;
        }

        // Gabungkan informasi ruang dengan status booking
        $result_data = [];

        foreach ($data_ruang as $ruang) {
            $nama_ruang = $ruang['nama_ruang'];

            $result_data[] = [
                'deskripsi_ruang' => $ruang['deskripsi_ruang'],
                'id_lantai' => $ruang['id_lantai'],
                'id_ruang' => $ruang['id_ruang'],
                'nama_ruang' => $nama_ruang,
                'status_ruang' => $ruang['status_ruang'],
                'listJam' => array_filter($data_booking, function ($booking) use ($nama_ruang) {
                    return $booking['nama_ruang'] === $nama_ruang;
                }),
            ];
        }

        return $result_data;
    }
}

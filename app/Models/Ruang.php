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
    public $id_jenis_ruang = '';
    public $status_ruang = '';
    public $qr_code = '';

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

    public function getRuang(string $hari, string $jam_mulai, string $jam_selesai, ?array $id_lantai, ?array $id_jenis_ruang, string $search): array
    {
        // Query untuk mendapatkan informasi ruang
        $sql_ruang = "SELECT * FROM view_getruang";
        $whereClauses = [];
        if (!empty($id_lantai)) {
            $whereClauses[] = "id_lantai IN (" . implode(',', $id_lantai) . ")";
        }

        if (!empty($id_jenis_ruang)) {
            $whereClauses[] = "id_jenis_ruang IN (" . implode(',', $id_jenis_ruang) . ")";
        }

        if (!empty($search)) {
            $whereClauses[] = "nama_ruang LIKE '%$search%'";
        }

        if (!empty($whereClauses)) {
            $sql_ruang .= " WHERE " . implode(' AND ', $whereClauses);
        }
        // $dataToAppend = print_r($sql_ruang, true) . "\n";
        // file_put_contents('log.txt', $dataToAppend, FILE_APPEND);
        $result_ruang = $this->db->query($sql_ruang);
        $data_ruang = [];
        while ($row_ruang = $result_ruang->fetch_assoc()) {
            $data_ruang[] = $row_ruang;
        }

        // Query untuk mendapatkan status booking
        $sql = "SELECT * FROM view_getbookingstatus WHERE nama_hari = '$hari'";
        if (!empty($jam_mulai) && !empty($jam_selesai)) {
            $sql .= " AND id_jam BETWEEN '$jam_mulai' AND '$jam_selesai' AND status_jam = 'available'";
        }
        if (!empty($id_lantai)) {
            $sql .= " AND id_lantai IN (" . implode(',', $id_lantai) . ")";
        }
        // print $sql to log
        // $dataToAppend = print_r($sql, true) . "\n";
        // file_put_contents('log.txt', $dataToAppend, FILE_APPEND);

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
                'id_jenis_ruang' => $ruang['id_jenis_ruang'],
                'nama_ruang' => $nama_ruang,
                'nama_lantai' => $ruang['nama_lantai'],
                'listJam' => array_filter($data_booking, function ($booking) use ($nama_ruang) {
                    return $booking['nama_ruang'] === $nama_ruang;
                }),
            ];
        }

        return $result_data;
    }

    public function getDetailRuang(string $id_ruang): object
    {
        $sql = "CALL getRuangDetailsById('$id_ruang')";
        $result = $this->db->query($sql);
        $data = $result->fetch_assoc();
        // return as object
        return (object) $data;
    }

    public function getStatusRuangPerDay(string $id_ruang): array
    {
        $sql = "SELECT * FROM view_getbookingstatus WHERE id_ruang = '$id_ruang'";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[$row['nama_hari']][] = $row;
        }
        return $data;
    }
    public function addRuang($kode_ruang, $nama, $jenis_ruang, $lantai): void
    {
        $sql = "CALL addRuang('$kode_ruang', '$nama', '$lantai', '$jenis_ruang' )";
        $this->exec($sql);
    }

    public function getRuangByID($id): object
    {
        $sql = "SELECT * FROM view_getruang WHERE id_ruang = '$id'";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return (object) $data[0];
    }

    public function editRuang($id, $kode_ruang, $nama, $jenis_ruang, $lantai)
    {
        $sql = "CALL editRuang('$id', '$kode_ruang', '$nama', '$jenis_ruang', '$lantai')";
        $this->exec($sql);
    }

    public function deleteRuang($id): void
    {
        $sql = "DELETE FROM ruang WHERE id_ruang = '$id'";
        $this->exec($sql);
    }
    public function getTotalRuangByIdJenis() : array
    {
        $sql = "SELECT COUNT(*) FROM `view_getruang` GROUP BY id_jenis_ruang";
        $result = $this->query($sql);
        $data = [];
        $i=0;
        while ($i<count($result)) {  
            $data['counter'][] = $result[$i]['COUNT(*)'];
            $i++;
        }
        
        $j = 0;
        while($j<count($data['counter'])){
            $k = 0;
            $total = 0;
            while($k<count($data['counter'])){
                $total += $data['counter'][$k];
                $k++;
            }
            $percentOfTotal = ($data['counter'][$j] / $total) * 100; 
            $data['percentage'][$j] =(float) number_format($percentOfTotal,2);
            $j++;
        }
        return $data;
    }

    public function getTopBookedRoom() : array
    {
        $sql = "SELECT * FROM `view_persentasekelas`";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }
}
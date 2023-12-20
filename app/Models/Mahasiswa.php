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
    public $created_at = '';

    public function getDetailMahasiswa($nim): object
    {
        $sql = "SELECT * FROM view_getmahasiswa  WHERE nim = '$nim' ";
        $stmt = $this->db->query($sql);
        return (object) $stmt->fetch_assoc();
    }
    
    public function getMahasiswaPagination(string $page): array
    {
        $page -= 1;
        $page *= 10;
        $sql = "SELECT * FROM view_getmahasiswa ORDER BY created_at DESC LIMIT 10 OFFSET $page";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getTotalPage(): int
    {
        $sql = "SELECT COUNT(*) AS total FROM view_getmahasiswa";
        $result = $this->db->query($sql);
        $data = $result->fetch_assoc();
        $total = $data['total'];
        $totalPage = ceil($total / 10);
        return $totalPage;
    }

    public function addMahasiswa($nim, $nama, $password, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $kelas): void {
        $sql = "CALL addMahasiswa('$nim', '$nama', '$password', '$tmpt_lahir', '$tgl_lahir', '$jenis_kelamin', '$kelas')";
        $this->exec($sql);
    }

    public function editMahasiswa($nim, $nama, $password, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $kelas) {
        $sql = "Call editMahasiswa('$nim', '$nama', '$password', '$tmpt_lahir', '$tgl_lahir', '$jenis_kelamin', '$kelas')";
        $this->exec($sql);
    }

    public function deleteMahasiswa($nim): void {
        $sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";
        $this->exec($sql);
    }  
    public function getMahasiswaSearch(object $request): array
    {
        $keyword = $request->keyword;
        $sql = "SELECT * FROM view_getmahasiswa WHERE nim LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR password LIKE '%$keyword%' OR tempat_lahir LIKE '%$keyword%' OR tanggal_lahir LIKE '%$keyword%' OR jenis_kelamin LIKE '%$keyword%' OR nama_kelas LIKE '%$keyword%' ORDER BY created_at DESC";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    
     public function totalMahasiswa() : int
    {
        $sql = "SELECT COUNT(*) AS total FROM view_getmahasiswa";
        $result = $this->db->query($sql);
        $data = $result->fetch_assoc();
        $total = $data['total'];
        return $total;
    }
}

<?php

namespace TugasBesar\BookingClass2g\Models;

use TugasBesar\BookingClass2g\Models\Model;

class Booking extends Model
{
    protected $table = 'booking';

    public function getNotification($level, $user): array
    {
        if ($level == 'mahasiswa') {
            $id_kelas = $user->id_kelas;
            $sql = "SELECT * FROM view_getbooking WHERE id_kelas = '$id_kelas' ORDER BY created_at DESC";
            $result = $this->query($sql);
            return $result;
        } else {
            $nip = $user->nip;
            $sql = "SELECT * FROM view_getbooking WHERE id_dosen = '$nip' ORDER BY created_at DESC";
            $result = $this->query($sql);
            return $result;
        }
    }

    public function getBookingPagination(string $page): array
    {
        $page -= 1;
        $page *= 10;
        $sql = "SELECT * FROM view_getbookingadmin ORDER BY tanggal_pesan DESC LIMIT 10 OFFSET $page";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getTotalPage(): int
    {
        $sql = "SELECT COUNT(*) AS total FROM view_getbookingadmin";
        $result = $this->db->query($sql);
        $data = $result->fetch_assoc();
        $total = $data['total'];
        $totalPage = ceil($total / 10);
        return $totalPage;
    }
}

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
        }
        $nip = $user->nip;
        $sql = "SELECT * FROM view_getbooking WHERE id_dosen = '$nip' ORDER BY created_at DESC";
        $result = $this->query($sql);
        return $result;
    }

    public function create(object $request, string $lampiran = null): bool
    {
        // get latest id_booking
        $sql = "SELECT id_booking FROM booking ORDER BY id_booking DESC LIMIT 1";
        $result = $this->query($sql);
        $id_booking = '';
        if (empty($result)) {
            $id_booking = 'B001';
        } else {
            $id_booking = $result[0]['id_booking'];
            $id_booking = substr($id_booking, 1);
            $last_id = intval(substr($id_booking, -3));
            $last_id_padded = str_pad($last_id + 1, 3, '0', STR_PAD_LEFT);
            $id_booking = 'B' . $last_id_padded;
        }

        $id_dosen = $request->id_dosen;
        $keterangan = $request->keterangan;
        $id_ruang = $request->id_ruang;
        $id_mahasiswa = $request->id_mahasiswa;
        $status = $request->status;
        $tanggal = $request->tanggal;
        $id_kelas = $request->id_kelas;
        $jam_mulai = $request->jam_mulai;
        $jam_selesai = $request->jam_selesai;
        $lampiran = $_COOKIE['lampiran'] ?? $lampiran;
        $id_last_dosen = $request->id_last_dosen;
        $id_mahasiswa = empty($id_mahasiswa) ? 'NULL' : "'$id_mahasiswa'";
        $id_last_dosen = empty($id_last_dosen) ? 'NULL' : "'$id_last_dosen'";

        $sql = "CALL addBooking(
            '$id_booking',
            '$tanggal',
            '$status',
            '$lampiran',
            $id_mahasiswa,
            '$id_dosen',
            '$id_kelas',
            '$id_ruang',
            '$jam_mulai',
            '$jam_selesai',
            '$keterangan',
            $id_last_dosen
        )";
        return $this->exec($sql);
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

    public function getBookingSearch(object $request): array
    {
        $keyword = $request->keyword;
        $sql = "SELECT * FROM view_getbookingadmin WHERE id_booking LIKE '%$keyword%' OR mahasiswa LIKE '%$keyword%' OR dosen LIKE '%$keyword%' OR ruang LIKE '%$keyword%' OR tanggal_pesan LIKE '%$keyword%' OR tanggal_pakai LIKE '%$keyword%' OR jam_mulai LIKE '%$keyword%' OR jam_selesai LIKE '%$keyword%' OR status LIKE '%$keyword%' OR keterangan LIKE '%$keyword%' OR nip LIKE '%$keyword%' ORDER BY tanggal_pesan DESC";
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

    public function verifikasiBooking(string $id_booking, string $status): bool
    {
        return $this->update(['status' => $status], $id_booking, 'id_booking');
    }

    public function markDone(string $id_booking): bool
    {
        return $this->update(['status' => 'done'], $id_booking, 'id_booking');
    }
    public function getBookingUrgent(): array
    {
        $sql = "SELECT * FROM booking WHERE status = 'urgent'";
        $result = $this->query($sql);
        return $result;
    }

    public function getBookingIntersect(string $tgl_booking, string $id_ruang, string $jam_mulai, string $jam_selesai): array
    {
        $sql = "CALL CheckBookingAvailability('$tgl_booking','$id_ruang','$jam_mulai','$jam_selesai')";
        $result = $this->query($sql);
        return $result;
    }

    public function getTotalBookingOnprocess(): int
    {
        $sql = "SELECT COUNT(*) AS total FROM booking WHERE status = 'onprocess'";
        $result = $this->query($sql);
        return $result[0]['total'];
    }
    public function getNewestBooking() : array
    {
        $sql = "SELECT * FROM view_getbookingadmin ORDER BY tanggal_pesan DESC LIMIT 10";
        $result = $this->db->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getAllBookHistory() : array
    {
        $sql1 = "SELECT COUNT(*) AS totalavailable FROM view_gethistorybooking WHERE status_jam = 'available' AND nama_hari = DAYNAME(CURRENT_DATE())";
        $sql2 = "SELECT COUNT(*) AS totalused FROM view_gethistorybooking WHERE status_jam = 'used' AND nama_hari = DAYNAME(CURRENT_DATE())";
        $sql3 = "SELECT COUNT(*) AS totaldone FROM view_gethistorybooking WHERE status_jam = 'done' AND nama_hari = DAYNAME(CURRENT_DATE())";
        $sql4 = "SELECT COUNT(*) AS totalunavailable FROM view_gethistorybooking WHERE (status_jam = 'done' OR status_jam = 'used') AND nama_hari = DAYNAME(CURRENT_DATE())";
     
        $result1 = $this->db->query($sql1);
        $result2 = $this->db->query($sql2);
        $result3 = $this->db->query($sql3);
        $result4 = $this->db->query($sql4);
        
        $data = [];
        while ($row = $result1->fetch_assoc()){
            $data[] = $row['totalavailable'];
        }
        while ($row = $result2->fetch_assoc()){
            $data[] = $row['totalused'];
        }
        while ($row = $result3->fetch_assoc()){
            $data[] = $row['totaldone'];
        }
        while ($row = $result4->fetch_assoc()){
            $data[] = $row['totalunavailable'];
        }

        return $data;
    }

}
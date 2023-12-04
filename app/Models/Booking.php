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
}

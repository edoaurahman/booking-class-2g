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
            $sql = "SELECT * FROM view_getbooking WHERE id_kelas = '$id_kelas'";
            $result = $this->query($sql);
            return $result;
        } else {
            $nip = $user->nip;
            $sql = "SELECT * FROM view_getbooking WHERE id_dosen = '$nip'";
            $result = $this->query($sql);
            return $result;
        }
    }
}

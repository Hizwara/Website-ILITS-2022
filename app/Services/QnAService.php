<?php

namespace App\Services;

use App\Models\Comments;
use App\Models\Soal;

class QnAService
{
    public function getImageQuestion($data)
    {
        $subtes_id = $data['subtes_id'];
        $kode_soal = $data['kode_soal'];
        $nomer_soal = $data['nomer_soal'];
        $getimage = Soal::where('subtes_id', '=', $subtes_id)
            ->where('kode_soal', '=', $kode_soal)
            ->where('nomer_soal', '=', $nomer_soal)
            ->first();
        return $getimage;
    }

    public function getComments($data)
    {
        $subtes_id = $data['subtes_id'];
        $kode_soal = $data['kode_soal'];
        $nomer_soal = $data['nomer_soal'];
        $list = Comments::join('users', 'comments.user_id', '=', 'users.id')
            ->where('subtes_id', '=', $subtes_id)
            ->where('kode_soal', '=', $kode_soal)
            ->where('nomer_soal', '=', $nomer_soal)
            ->paginate(15);
        return $list;
    }
}

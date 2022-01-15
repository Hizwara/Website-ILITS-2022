<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subtes;

class SubtesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subtest = [
            [1, 'Penalaran Umum'],
            [2, 'Pemahaman Bacaan dan Menulis'],
            [3, 'Pengetahuan dan Pemahaman Umum'],
            [4, 'Bahasa Inggris'],
            [5, 'Pengetahuan Kuantitatif'],
            [6, 'Matematika Saintek'],
            [7, 'Fisika '],
            [8, 'Kimia '],
            [9, 'Biologi'],
            [10, 'Geografi'],
            [11, 'Sejarah'],
            [12, 'Sosiolog'],
            [13, 'Ekonomi'],
        ];
        foreach ($subtest as $index => $s) {
            $subtest = Subtes::create([
                'id' => $s[0],
                'nama_subtes' => $s[1],
            ]);
        }
    }
}

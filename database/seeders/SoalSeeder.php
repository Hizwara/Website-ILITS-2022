<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Soal;
use League\Csv\Reader;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $records = Reader::createFromPath("database/seeders/csv/soal.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        $i = 1;
        foreach ($records as $record) {
            // $this -> command ->info($record['deskripsi']);

            $soal = Soal::create([
                'id' => $i,
                'subtes_id' => $record['subtes_id'],
                'kode_soal' => $record['kode_soal'],
                'nomer_soal' => $record['nomer_soal'],
                'link_gambar' => $record['link_gambar']
            ]);

            $i = $i + 1;
        }
    }
}

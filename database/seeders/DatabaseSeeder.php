<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            WilayahSeeder::class,
            FordaSeeder::class,
            //PesertaSeeder::class,
            SesiOdlSeeder::class,
            SesiFndSeeder::class,
            FakultasSeeder::class,
            KelasSeeder::class,
            DepartemenSeeder::class,
            AkreditasiSeeder::class,
            AktivitasMahasiswaSeeder::class,
            ProspekKerjaSeeder::class,
            AlumniSeeder::class,
            FasilitasSeeder::class,
            FakultasKerjasamaSeeder::class,
            FakultasSejarahSeeder::class,
            MerchSeeder::class,
            BeasiswaSeeder::class,
            EventualSeeder::class,
            PrestasiSeeder::class,
            SubtesSeeder::class,
            SoalSeeder::class,
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `provinsi` (`id`, `nama`, `status`) VALUES
        (11, 'ACEH', 1),
        (12, 'SUMATERA UTARA', 1),
        (13, 'SUMATERA BARAT', 1),
        (14, 'RIAU', 1),
        (15, 'JAMBI', 1),
        (16, 'SUMATERA SELATAN', 1),
        (17, 'BENGKULU', 1),
        (18, 'LAMPUNG', 1),
        (19, 'KEPULAUAN BANGKA BELITUNG', 1),
        (21, 'KEPULAUAN RIAU', 1),
        (31, 'DKI JAKARTA', 1),
        (32, 'JAWA BARAT', 1),
        (33, 'JAWA TENGAH', 1),
        (34, 'DI YOGYAKARTA', 1),
        (35, 'JAWA TIMUR', 1),
        (36, 'BANTEN', 1),
        (51, 'BALI', 1),
        (52, 'NUSA TENGGARA BARAT', 1),
        (53, 'NUSA TENGGARA TIMUR', 1),
        (61, 'KALIMANTAN BARAT', 1),
        (62, 'KALIMANTAN TENGAH', 1),
        (63, 'KALIMANTAN SELATAN', 1),
        (64, 'KALIMANTAN TIMUR', 1),
        (65, 'KALIMANTAN UTARA', 1),
        (71, 'SULAWESI UTARA', 1),
        (72, 'SULAWESI TENGAH', 1),
        (73, 'SULAWESI SELATAN', 1),
        (74, 'SULAWESI TENGGARA', 1),
        (75, 'GORONTALO', 1),
        (76, 'SULAWESI BARAT', 1),
        (81, 'MALUKU', 1),
        (82, 'MALUKU UTARA', 1),
        (91, 'PAPUA BARAT', 1),
        (94, 'PAPUA', 1)");
    }
}

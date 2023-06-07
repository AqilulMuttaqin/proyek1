<?php

namespace Database\Seeders;

use App\Models\Kuota;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KuotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Mendapatkan tanggal saat ini
         $startDate = Carbon::now();

         // Mendapatkan tanggal 2 bulan dari sekarang
         $endDate = Carbon::now()->addMonths(12);
 
         // Mengulang proses untuk setiap tanggal dalam rentang
         for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
             // Membuat data kuota dengan tanggal dan kuota yang diinginkan
             Kuota::create([
                'tanggal' => $date->toDateString(),
                'kuota' => 60
             ]);
        }
         }
         
}

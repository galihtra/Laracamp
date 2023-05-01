<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price' => 280,
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => 140,
            ],
        ];

        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
    }

}

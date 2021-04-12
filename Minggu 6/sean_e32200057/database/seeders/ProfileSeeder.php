<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => '08970360968',
            'ttl' => '2001-11-11',
            'foto' => 'picture.png',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phone')->insert([
            'brand' => 'Motorola',
            'model' => 'E4 Plus',
            'number' => 2804333410,
            'imei' => 35656559585454,
            'owner' => 'Lucas Bobadilla',
            'state' => 'Listo',
        ]);
    }
}

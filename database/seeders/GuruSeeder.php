<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException ;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'namaguru'=> 'Erwin',
            'nik'=> '10101010',
            'mapel'=> 'IPS',
            'username'=> 'Erwin',
            'password'=> 'Erwin'
        ]);
    }
}

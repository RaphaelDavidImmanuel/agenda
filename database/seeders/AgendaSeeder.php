<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException ;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name'=> 'raphael',
            'mata_pelajaran'=> 'sincos',
            'materi'=> 'mtk',
            'jam_pelajaran'=>'07:00:00 to 08:00:00',
            'absen'=>'yang tidak masuk',
            'kelas'=>'XI RPL 2',
            'pembelajaran'=>'Offline',
            'link'=>'inilink',
            'foto'=>'inifoto',
            'keterangan'=>'ijin'
        ]);
    }
}

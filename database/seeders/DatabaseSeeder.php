<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('posts')->insert([
        //     'name'=> 'raphael',
        //     'pelajaran'=> 'sincos',
        //     'materi'=> 'mtk',
        //     'tanggal'=>'2005-05-05',
        //     'link'=>'inilink',
        //     'foto'=>'inifoto'
        // ]);
    }
}

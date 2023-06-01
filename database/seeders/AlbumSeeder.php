<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('album')->insert([
            'nome' => 'Rei do Gado',
            'artista' => 'Tião Carreiro & Pardinho',
            'ano'=> 1961,
            'duracao' => 43.23,
            'idioma' => 'pt-BR',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

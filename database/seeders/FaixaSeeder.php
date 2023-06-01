<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class FaixaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faixa')->insert([
            'nome' => 'Rei do Gado',
            'compositores' => 'Teddy Vieira',
            'album_id' => 1,
            'duracao'=> 2.57,
            'ordem' => 9,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

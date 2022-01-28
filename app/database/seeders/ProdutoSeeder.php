<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produto')->insert([
            'nome_produto' => 'Tero do tubas',
            'forn_produto' => 'Tubas',
        ]);
        DB::table('produto')->insert([
            'nome_produto' => 'Café do tubas',
            'forn_produto' => 'Tubas',
        ]);
        DB::table('produto')->insert([
            'nome_produto' => 'Breja do Jão',
            'forn_produto' => 'Jão',
        ]);
    }
}

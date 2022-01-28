<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoDescricaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produto_descricao')->insert([
            'produto_id' => 1,
            'descricao' => 'terere muito top do tubas',
        ]);

        DB::table('produto_descricao')->insert([
            'produto_id' => 2,
            'descricao' => 'café muito top do tubas',
        ]);

        DB::table('produto_descricao')->insert([
            'produto_id' => 3,
            'descricao' => 'breja muito top do jão',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome' => 'Arroz',
            'preco' => '12.98',
            'loja_id' => 1
        ]);
        Produto::create([
            'nome' => 'Feijão',
            'preco' => '8.63',
            'loja_id' => 2
        ]);
        Produto::create([
            'nome' => 'Sal',
            'preco' => '1.35',
            'loja_id' => 3
        ]);
    }
}

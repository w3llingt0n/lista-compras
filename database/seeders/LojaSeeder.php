<?php

namespace Database\Seeders;

use App\Models\Loja;
use Illuminate\Database\Seeder;

class LojaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loja::create([
            'nome' => 'Supermercados BH',
            'endereco' => 'Buritizeiro',
        ]);
        Loja::create([
            'nome' => 'Supermercados Albatroz',
            'endereco' => 'Buritizeiro'
        ]);
        Loja::create([
            'nome' => 'Bretas',
            'endereco' => 'Pirapora'
        ]);
    }
}

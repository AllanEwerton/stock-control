<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create(['nome' => 'Roupas', 'descricao' => 'Roupas em geral']);
        Categoria::create(['nome' => 'Eletrônicos', 'descricao' => 'Eletrônicos em geral']);
        Categoria::create(['nome' => 'Informática', 'descricao' => 'Informática em geral',]);
        Categoria::create(['nome' => 'Livros', 'descricao' => 'Livros em geral', ]);
        Categoria::create(['nome' => 'Esportes', 'descricao' => 'Esportes em geral', ]);
        Categoria::create(['nome' => 'Alimentos', 'descricao' => 'Alimentos em geral', ]);

    }
}

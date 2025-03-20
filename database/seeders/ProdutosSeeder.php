<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Produto::create([
        'nome' => 'Camiseta',
        'descricao' => 'Camiseta branca',
        'preco' => 20.00,
        'quantidade' => 10,
        'slug' => 'camiseta',
        'imagem' => 'camiseta.jpg',
        'id_user' => 1,
        'id_categoria' => 1
         ]);

        Produto::create([
            'nome' => 'Calça',
            'descricao' => 'Calça jeans',
            'preco' => 50.00,
            'quantidade' => 10,
            'slug' => 'calca',
            'imagem' => 'calca.jpg',
            'id_user' => 1,
            'id_categoria' => 1
        ]);
        Produto::create([
                'nome' => 'Bermuda',
                'descricao' => 'Bermuda jeans',
                'preco' => 30.00,
                'quantidade' => 10,
                'slug' => 'bermuda',
                'imagem' => 'bermuda.jpg',
                'id_user' => 1,
                'id_categoria' => 1
        ]);
        Produto::create([
                    'nome' => 'Sapato',
                    'descricao' => 'Sapato de couro',
                    'preco' => 100.00,
                    'quantidade' => 10,
                    'slug' => 'sapato',
                    'imagem' => 'sapato.jpg',
                    'id_user' => 1,
                    'id_categoria' => 1
        ]);
        Produto::create([
                        'nome' => 'fone de ouvido',
                        'descricao' => 'fone de ouvido bluetooth',
                        'preco' => 100.00,
                        'quantidade' => 10,
                        'slug' => 'fone',
                        'imagem' => 'fone.jpg',
                        'id_user' => 1,
                        'id_categoria' => 2
        ]);
        Produto::create([
                            'nome' => 'smartphone',
                            'descricao' => 'smartphone 5g',
                            'preco' => 2000.00,
                            'quantidade' => 10,
                            'slug' => 'smartphone',
                            'imagem' => 'smartphone.jpg',
                            'id_user' => 1,
                            'id_categoria' => 3
        ]);
        Produto::create([
                            'nome' => 'notebook',
                            'descricao' => 'notebook i5',
                            'preco' => 2000.00,
                            'quantidade' => 10,
                            'slug' => 'notebook',
                            'imagem' => 'notebook.jpg',
                            'id_user' => 1,
                            'id_categoria' => 3
        ]);
        Produto::create([
                            'nome' => 'tablet',
                            'descricao' => 'tablet 5g',
                            'preco' => 2000.00,
                            'quantidade' => 10,
                            'slug' => 'tablet',
                            'imagem' => 'tablet.jpg',
                            'id_user' => 1,
                            'id_categoria' => 3
        ]);
        Produto::create([
                            'nome' => 'mouse',
                            'descricao' => 'mouse sem fio',
                            'preco' => 50.00,
                            'quantidade' => 10,
                            'slug' => 'mouse',
                            'imagem' => 'mouse.jpg',
                            'id_user' => 1,
                            'id_categoria' => 3
        ]);
        Produto::create([
                                'nome' => 'livro',
                                'descricao' => 'livro de PHP',
                                'preco' => 50.00,
                                'quantidade' => 10,
                                'slug' => 'livro',
                                'imagem' => 'livro.jpg',
                                'id_user' => 1,
                                'id_categoria' => 4
        ]);
        Produto::create([
                                    'nome' => 'jornal',
                                    'descricao' => 'jornal de informática',
                                    'preco' => 20.00,
                                    'quantidade' => 10,
                                    'slug' => 'jornal',
                                    'imagem' => 'jornal.jpg',
                                    'id_user' => 1,
                                    'id_categoria' => 4
        ]);
        Produto::create([
                                        'nome' => 'caderno',
                                        'descricao' => 'caderno de informática',
                                        'preco' => 20.00,
                                        'quantidade' => 10,
                                        'slug' => 'caderno',
                                        'imagem' => 'caderno.jpg',
                                        'id_user' => 1,
                                        'id_categoria' => 4
        ]);
        Produto::create([
                                    'nome' => 'revista',
                                    'descricao' => 'revista de informática',
                                    'preco' => 20.00,
                                    'quantidade' => 10,
                                    'slug' => 'revista',
                                    'imagem' => 'revista.jpg',
                                    'id_user' => 1,
                                    'id_categoria' => 4
        ]);
        Produto::create([
                                        'nome' => 'caneta',
                                        'descricao' => 'caneta azul',
                                        'preco' => 5.00,
                                        'quantidade' => 10,
                                        'slug' => 'caneta',
                                        'imagem' => 'caneta.jpg',
                                        'id_user' => 1,
                                        'id_categoria' => 5
        ]);
        Produto::create([
                                        'nome' => 'lapis',
                                        'descricao' => 'lapis de cor',
                                        'preco' => 5.00,
                                        'quantidade' => 10,
                                        'slug' => 'lapis',
                                        'imagem' => 'lapis.jpg',
                                        'id_user' => 1,
                                        'id_categoria' => 5
        ]);
        Produto::create([
                                        'nome' => 'borracha',
                                        'descricao' => 'borracha branca',
                                        'preco' => 5.00,
                                        'quantidade' => 10,
                                        'slug' => 'borracha',
                                        'imagem' => 'borracha.jpg',
                                        'id_user' => 1,
                                        'id_categoria' => 5
        ]);
        Produto::create([
                                    'nome' => 'bola',
                                    'descricao' => 'bola de futebol',
                                    'preco' => 50.00,
                                    'quantidade' => 10,
                                    'slug' => 'bola',
                                    'imagem' => 'bola.jpg',
                                    'id_user' => 1,
                                    'id_categoria' => 5
        ]);
        Produto::create([
                                        'nome' => 'arroz',
                                        'descricao' => 'arroz 5kg',
                                        'preco' => 20.00,
                                        'quantidade' => 10,
                                        'slug' => 'arroz',
                                        'imagem' => 'arroz.jpg',
                                        'id_user' => 1,
                                        'id_categoria' => 6
        ]);
        Produto::create([
                                        'nome' => 'feijao',
                                        'descricao' => 'feijao 1kg',
                                        'preco' => 10.00,
                                        'quantidade' => 10,
                                        'slug' => 'feijao',
                                        'imagem' => 'feijao.jpg',
                                        'id_user' => 1,
                                        'id_categoria' => 6
        ]);
        Produto::create([
                                        'nome' => 'macarrao',
                                        'descricao' => 'macarrao 1kg',
                                        'preco' => 5.00,
                                        'quantidade' => 10,
                                        'slug' => 'macarrao',
                                        'imagem' => 'macarrao.jpg',
                                        'id_user' => 1,
                                        'id_categoria' => 6
        ]);
        Produto::create([
                                        'nome' => 'carne',
                                        'descricao' => 'carne 1kg',
                                        'preco' => 20.00,
                                        'quantidade' => 10,
                                        'slug' => 'carne',
                                        'imagem' => 'carne.jpg',
                                        'id_user' => 1,
                                        'id_categoria' => 6
        ]);


    }
}

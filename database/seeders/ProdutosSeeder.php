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
        $produtos = [
            [
                'nome' => 'Camiseta',
                'descricao' => 'Camiseta de algodão confortável, leve, ideal para o dia a dia e combina com qualquer estilo',
                'preco' => 20.00,
                'id_user' => 1,
                'id_categoria' => 1,
                'imagem' => 'https://img.freepik.com/vetores-gratis/modelo-de-camisa-branca_1132-95.jpg?t=st=1742564786~exp=1742568386~hmac=ba6b7f455d73bee1b71b64fb3164dd2af4f49d9949c190c2c13ab905f254bd51&w=740',
                'slug' => 'camiseta',
                'quantidade' => 100,
            ],
            [
                'nome' => 'Calça',
                'descricao' => 'Calça jeans resistente, estilosa, perfeita para diversas ocasiões e com ótimo acabamento',
                'preco' => 50.00,
                'id_user' => 1,
                'id_categoria' => 1,
                'imagem' => 'https://img.freepik.com/fotos-premium/manequins-em-uma-loja-de-roupas_1048944-10047180.jpg?w=740',
                'slug' => 'calca',
                'quantidade' => 50,
            ],
            [
                'nome' => 'Tênis',
                'descricao' => 'Tênis de corrida com amortecimento avançado, ideal para esportes e caminhadas longas',
                'preco' => 100.00,
                'id_user' => 1,
                'id_categoria' => 2,
                'imagem' => 'tenis.jpg',
                'slug' => 'tenis',
                'quantidade' => 30,
            ],
            [
                'nome' => 'Chinelo',
                'descricao' => 'Chinelo de dedo confortável, durável, perfeito para uso diário e momentos de lazer',
                'preco' => 10.00,
                'id_user' => 1,
                'id_categoria' => 2,
                'imagem' => 'chinelo.jpg',
                'slug' => 'chinelo',
                'quantidade' => 200,
            ],
            [
                'nome' => 'Notebook',
                'descricao' => 'Notebook com processador i5, alto desempenho, ideal para trabalho, estudos e entretenimento',
                'preco' => 2000.00,
                'id_user' => 1,
                'id_categoria' => 3,
                'imagem' => 'notebook.jpg',
                'slug' => 'notebook',
                'quantidade' => 10,
            ],
            [
                'nome' => 'Mouse',
                'descricao' => 'Mouse sem fio ergonômico, preciso, com design moderno e ideal para uso prolongado',
                'preco' => 50.00,
                'id_user' => 1,
                'id_categoria' => 3,
                'imagem' => 'mouse.jpg',
                'slug' => 'mouse',
                'quantidade' => 100,
            ],
            [
                'nome' => 'Livro',
                'descricao' => 'Livro de romance envolvente, emocionante, com personagens cativantes e uma história inesquecível',
                'preco' => 30.00,
                'id_user' => 1,
                'id_categoria' => 4,
                'imagem' => 'livro-romance.jpg',
                'slug' => 'livro-romance',
                'quantidade' => 70,
            ],
            [
                'nome' => 'Livro',
                'descricao' => 'Livro de suspense intrigante, cheio de reviravoltas, que prende a atenção do início ao fim',
                'preco' => 30.00,
                'id_user' => 1,
                'id_categoria' => 4,
                'imagem' => 'livro-suspense.jpg',
                'slug' => 'livro-suspense',
                'quantidade' => 60,
            ],
            [
                'nome' => 'Bola',
                'descricao' => 'Bola de futebol de alta qualidade, resistente, ideal para jogos em diversos tipos de campo',
                'preco' => 50.00,
                'id_user' => 1,
                'id_categoria' => 5,
                'imagem' => 'bola.jpg',
                'slug' => 'bola',
                'quantidade' => 40,
            ],
            [
                'nome' => 'Raquete',
                'descricao' => 'Raquete de tênis leve, resistente, com ótima precisão e ideal para jogadores de todos os níveis',
                'preco' => 100.00,
                'id_user' => 1,
                'id_categoria' => 5,
                'imagem' => 'raquete.jpg',
                'slug' => 'raquete',
                'quantidade' => 25,
            ],
            [
                'nome' => 'Arroz',
                'descricao' => 'Arroz 5kg de alta qualidade, saboroso, perfeito para refeições em família e pratos especiais',
                'preco' => 20.00,
                'id_user' => 1,
                'id_categoria' => 6,
                'imagem' => 'arroz.jpg',
                'slug' => 'arroz',
                'quantidade' => 150,
            ],
            [
                'nome' => 'Feijão',
                'descricao' => 'Feijão 5kg nutritivo, saboroso, ideal para acompanhar refeições e preparar pratos tradicionais',
                'preco' => 15.00,
                'id_user' => 1,
                'id_categoria' => 6,
                'imagem' => 'feijao.jpg',
                'slug' => 'feijao',
                'quantidade' => 120,
            ],
        ];

        foreach ($produtos as $produto) {
            Produto::create($produto);
        }

        echo "Quantidade de produtos inseridos: " . count($produtos) . "\n";
    }
}

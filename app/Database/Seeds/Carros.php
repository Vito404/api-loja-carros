<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()

    {
        $nome = ['Uno', 'Renegade', 'Corolla', 'Corsa', 'Civic'];
        $desc = [
            '1.3 Turbo, o mais potente da categoria',
            '1.8 líder de vendas',
            'O carro que conquistou o mercado mundial',
            'Pau para toda obra',
            'Carro bonito'
        ];
        $cor = ['Vermelho', 'Cinza', 'Prata', 'Prata', 'Branco'];
        $placa = ['AJK8647', 'UOI8712', 'HGB5647', 'FDC0987', 'CVB2014'];
        $marca = ['Fiat', 'Jeep', 'Toyota', 'Chevrolet', 'Honda'];
        $valor = [5000, 20000, 7000, 6000, 10000];
        
        for ($x = 0; $x <= 5; $x++) {
            $data = [
                'nome' => $nome[$x],
                'descricao' => $desc[$x],
                'cor' => $cor[$x],
                'placa' => $placa[$x],
                'marca' => $marca[$x],
                'valor'    => $valor[$x],
            ];

            $this->db->table('carros')->insert($data);
        }
    }
}

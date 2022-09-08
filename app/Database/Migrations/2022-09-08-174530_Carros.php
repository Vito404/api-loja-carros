<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'descrição' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'cor' => [
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'placa' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'marca' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'valor' => [
                'type' => 'double',
            ],
        ]);
        $this->forge->addkey('id', true);
        $this->forge->createTable('carros');
    }

    public function down()
    {
        $this->forge->dropTable('carros');
    }
}

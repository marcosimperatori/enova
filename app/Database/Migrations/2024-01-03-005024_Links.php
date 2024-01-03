<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Links extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nome_exibicao' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'link' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'categoria' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'criado_em' => [
                'type'    => 'DATETIME',
                'null'    => true,
                'default' => null,
            ],
            'atualizado_em' => [
                'type'    => 'DATETIME',
                'null'    => true,
                'default' => null,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('link');
        $this->forge->createTable('links');
    }

    public function down()
    {
        $this->forge->dropTable('links');
    }
}

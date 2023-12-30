<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Noticias extends Migration
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
            'assunto' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'descricao' => [
                'type'  => 'TEXT'
            ],
            'exibir' => [
                'type'    => 'BOOLEAN',
                'default' => false,
            ],
            'usuario' => [
                'type'       =>  'INT',
                'constraint' => 9,
                'unsigned'   => true
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
        $this->forge->addUniqueKey('assunto');
        $this->forge->addForeignKey('usuario', 'usuarios', 'id', 'NO ACTION', 'NO ACTION', 'noticia_user');
        $this->forge->createTable('noticias');
    }

    public function down()
    {
        $this->forge->dropTable('noticias');
    }
}

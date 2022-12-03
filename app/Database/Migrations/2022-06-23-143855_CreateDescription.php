<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDescription extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'department_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],

            'department_name' => [
                'type'        => 'TEXT',
                'constraint'  => '50',
            ],

            'department_description' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null
            ],
        ]);
        $this->forge->addPrimaryKey('department_id', true);
        $this->forge->createTable('departments');
    }

    public function down()
    {
        $this->forge->dropTable('departments');
    }
}

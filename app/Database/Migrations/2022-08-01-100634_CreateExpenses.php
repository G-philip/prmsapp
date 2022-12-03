<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateExpenses extends Migration
{
    public function up()
    {
       $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'expense_name' => [
                'type'       => 'TEXT',
                'constraint' => '50',
            ],
            'expense_description' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'amount' => [
                'type' => 'INT',
                'constraint' => '50',
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
        $this->forge->addKey('id');
        $this->forge->createTable('expenses');

    }

    public function down()
    {
       $this->forge->dropTable('expenses');
    }
}

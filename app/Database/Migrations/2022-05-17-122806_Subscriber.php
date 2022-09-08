<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subscriber extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email_address'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'date'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'time'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
           
        
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('subscribers');
    }

    public function down()
    {
        $this->forge->dropTable('subscibers');
    }
}

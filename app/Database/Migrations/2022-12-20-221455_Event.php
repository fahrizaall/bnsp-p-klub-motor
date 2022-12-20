<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Event extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'event_name' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ],
            'date' => [
                'type'          => 'DATE',
            ],
            'description' => [
                'type'          => 'VARCHAR',
                'constraint'    => '225'
            ],
            'image' => [
                'type'          => 'VARCHAR',
                'constraint'    => '225',
                'null'          => true, 
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('event');
    }

    public function down()
    {
        $this->forge->dropTable('event');
    }
}

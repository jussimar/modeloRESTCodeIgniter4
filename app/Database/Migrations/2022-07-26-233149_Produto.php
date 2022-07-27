<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'int',
                'auto_increment'=>true
            ],
            'nome'=>[
                'type'=>'varchar',
                'constraint'=>50
            ],
            'valor'=>[
                'type'=>'double',
            ],
            

        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}

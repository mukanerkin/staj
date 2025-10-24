<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateCountries extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'INT','constraint'=>10,'unsigned'=>true,'auto_increment'=>true],
            'code_2' => ['type'=>'VARCHAR','constraint'=>2,'unique'=>true],
            'name' => ['type'=>'VARCHAR','constraint'=>50],
            'created_at' => ['type'=>'DATETIME','default'=>new RawSql('CURRENT_TIMESTAMP')],
            'updated_at'=>['type'=>'DATETIME','null'=>true,'ON UPDATE'=>new RawSql('CURRENT_TIMESTAMP')],
            'deleted_at' => ['type'=>'DATETIME','null'=>true]
        ]);
        $this->forge->addKey('id',true);
        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('countries',true,$attributes);
    }

    public function down()
    {
        $this->forge->dropTable('countries',true);
    }
}
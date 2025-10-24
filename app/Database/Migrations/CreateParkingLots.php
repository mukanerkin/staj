<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateParkingLots extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>['type'=>'INT','constraint'=>10,'unsigned'=>true,'auto_increment'=>true],
            'name'=>['type'=>'VARCHAR','constraint'=>100],
            'address'=>['type'=>'VARCHAR','constraint'=>255],
            'latitude'=>['type'=>'DECIMAL','constraint'=>'16,14'],
            'longitude'=>['type'=>'DECIMAL','constraint'=>'16,14'],
            'type'=>['type'=>'ENUM','constraint'=>['indoor','outdoor']],
            'capacity'=>['type'=>'INT','constraint'=>11,'unsigned'=>true],
            'area'=>['type'=>'INT','constraint'=>11,'unsigned'=>true],
            'created_at'=>['type'=>'DATETIME','default'=>new RawSql('CURRENT_TIMESTAMP')],
            'updated_at'=>['type'=>'DATETIME','null'=>true,'ON UPDATE'=>new RawSql('CURRENT_TIMESTAMP')],
            'deleted_at'=>['type'=>'DATETIME','null'=>true]
        ]);
        $this->forge->addKey('id',true);
        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('parking_lots',true,$attributes);
    }

    public function down()
    {
        $this->forge->dropTable('parking_lots',true);
    }
}
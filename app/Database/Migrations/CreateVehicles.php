<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateVehicles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>['type'=>'INT','constraint'=>10,'unsigned'=>true,'auto_increment'=>true],
            'vin'=>['type'=>'VARCHAR','constraint'=>20],
            'plate'=>['type'=>'VARCHAR','constraint'=>20],
            'country_code'=>['type'=>'VARCHAR','constraint'=>2],
            'brand'=>['type'=>'VARCHAR','constraint'=>20,'null'=>true],
            'model'=>['type'=>'VARCHAR','constraint'=>20,'null'=>true],
            'photo'=>['type'=>'VARCHAR','constraint'=>45,'null'=>true],
            'created_at'=>['type'=>'DATETIME','default'=>new RawSql('CURRENT_TIMESTAMP')],
            'updated_at'=>['type'=>'DATETIME','null'=>true,'ON UPDATE'=>new RawSql('CURRENT_TIMESTAMP')],
            'deleted_at'=>['type'=>'DATETIME','null'=>true]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->addKey(['vin','plate','country_code'],false,true,'vin_plate_country');
        $this->forge->addForeignKey('country_code', 'countries', 'code_2', 'CASCADE', 'CASCADE');
        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('vehicles',true,$attributes);
    }

    public function down()
    {
        $this->forge->dropTable('vehicles',true);
    }
}
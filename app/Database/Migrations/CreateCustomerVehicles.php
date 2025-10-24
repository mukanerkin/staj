<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateCustomerVehicles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>['type'=>'INT','constraint'=>10,'unsigned'=>true,'auto_increment'=>true],
            'customer_id'=>['type'=>'INT','constraint'=>10,'unsigned'=>true],
            'vehicle_id'=>['type'=>'INT','constraint'=>10,'unsigned'=>true],
            'created_at'=>['type'=>'DATETIME','default'=>new RawSql('CURRENT_TIMESTAMP')],
            'updated_at'=>['type'=>'DATETIME','null'=>true,'ON UPDATE'=>new RawSql('CURRENT_TIMESTAMP')],
            'deleted_at'=>['type'=>'DATETIME','null'=>true]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->addKey(['customer_id','vehicle_id'],false,true);
        $this->forge->addKey('customer_id');
        $this->forge->addKey('vehicle_id');
        $this->forge->addForeignKey('customer_id','customers','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('vehicle_id','vehicles','id','CASCADE','CASCADE');
        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('customer_vehicles',true,$attributes);
    }

    public function down()
    {
        $this->forge->dropTable('customer_vehicles',true);
    }
}
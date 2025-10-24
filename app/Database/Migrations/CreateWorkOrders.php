<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateWorkOrders extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>['type'=>'INT','constraint'=>10,'unsigned'=>true,'auto_increment'=>true],
            'customer_vehicle_id'=>['type'=>'INT','constraint'=>10,'unsigned'=>true],
            'user_id'=>['type'=>'INT','constraint'=>10,'unsigned'=>true],
            'parking_lot_id'=>['type'=>'INT','constraint'=>10,'unsigned'=>true],
            'order_type'=>['type'=>'ENUM','constraint'=>['park','retrieve'],'default'=>'park'],
            'created_at'=>['type'=>'DATETIME','default'=>new RawSql('CURRENT_TIMESTAMP')],
            'closed_at'=>['type'=>'DATETIME','null'=>true],
            'updated_at'=>['type'=>'DATETIME','null'=>true,'ON UPDATE'=>new RawSql('CURRENT_TIMESTAMP')],
            'deleted_at'=>['type'=>'DATETIME','null'=>true]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->addForeignKey('customer_vehicle_id','customer_vehicles','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('parking_lot_id','parking_lots','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('user_id','users','id','CASCADE','CASCADE');
        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('work_orders',true,$attributes);
    }

    public function down()
    {
        $this->forge->dropTable('work_orders',true);
    }
}
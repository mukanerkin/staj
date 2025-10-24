<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateParkingLogs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>['type'=>'INT','constraint'=>10,'unsigned'=>true,'auto_increment'=>true],
            'work_order_id_enter'=>['type'=>'INT','constraint'=>10,'unsigned'=>true],
            'work_order_id_exit'=>['type'=>'INT','constraint'=>10,'unsigned'=>true,'null'=>true],
            'enter_time'=>['type'=>'DATETIME','default'=>new RawSql('CURRENT_TIMESTAMP')],
            'exit_time'=>['type'=>'DATETIME','null'=>true],
            'created_at'=>['type'=>'DATETIME','default'=>new RawSql('CURRENT_TIMESTAMP')],
            'updated_at'=>['type'=>'DATETIME','null'=>true,'extra'=>'ON UPDATE CURRENT_TIMESTAMP()'],
            'deleted_at'=>['type'=>'DATETIME','null'=>true]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->addForeignKey('work_order_id_enter','work_orders','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('work_order_id_exit','work_orders','id','CASCADE','CASCADE');
        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('parking_logs',true,$attributes);
    }

    public function down()
    {
        $this->forge->dropTable('parking_logs',true);
    }
}
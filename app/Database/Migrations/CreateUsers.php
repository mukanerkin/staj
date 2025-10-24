<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'INT','constraint'=>10,'unsigned'=>true,'auto_increment'=>true],
            'user_level' => ['type'=>'ENUM','constraint'=>['admin','receptionist','valet']],
            'username' => ['type'=>'VARCHAR','constraint'=>20,'unique'=>true],
            'password_hash' => ['type'=>'VARCHAR','constraint'=>40],
            'first_name' => ['type'=>'VARCHAR','constraint'=>20],
            'last_name' => ['type'=>'VARCHAR','constraint'=>20],
            'profile_picture' => ['type'=>'VARCHAR','constraint'=>40,'null'=>true],
            'email_address' => ['type'=>'VARCHAR','constraint'=>100,'unique'=>true],
            'phone_number' => ['type'=>'VARCHAR','constraint'=>10,'unique'=>true],
            'created_at' => ['type'=>'DATETIME','default'=>new RawSql('CURRENT_TIMESTAMP')],
            'updated_at'=>['type'=>'DATETIME','null'=>true,'ON UPDATE'=>new RawSql('CURRENT_TIMESTAMP')],
            'deleted_at' => ['type'=>'DATETIME','null'=>true]
        ]);
        $this->forge->addKey('id',true);
        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('users',true,$attributes);
    }

    public function down()
    {
        $this->forge->dropTable('users',true);
    }
}
<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateCustomers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>['type'=>'INT','constraint'=>10,'unsigned'=>true,'auto_increment'=>true],
            'identity_number_hash'=>['type'=>'TEXT'],
            'identity_number_type'=>['type'=>'ENUM','constraint'=>['id_card','pasport'],'default'=>'id_card'],
            'nationality'=>['type'=>'VARCHAR','constraint'=>2],
            'first_name' => ['type'=>'VARCHAR','constraint'=>50],
            'last_name' => ['type'=>'VARCHAR','constraint'=>50],
            'phone_number'=>['type'=>'VARCHAR','constraint'=>10,'null'=>true],
            'email_address'=>['type'=>'VARCHAR','constraint'=>150,'null'=>true],
            'created_at'=>['type'=>'DATETIME','default'=>new RawSql('CURRENT_TIMESTAMP')],
            'updated_at'=>['type'=>'DATETIME','null'=>true,'ON UPDATE'=>new RawSql('CURRENT_TIMESTAMP')],
            'deleted_at'=>['type'=>'DATETIME','null'=>true]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->addForeignKey('nationality', 'countries', 'code_2', 'CASCADE', 'CASCADE');
        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('customers',true,$attributes);
    }

    public function down()
    {
        $this->forge->dropTable('customers',true);
    }
}
<?php

namespace App\Models;

class UserModel extends BaseModel
{
    protected $returnType     = \App\Entities\User::class;

    protected $allowedFields = ['user_level', 'username', 'password_hash', 'first_name', 'last_name', 'profile_picture', 'email_address', 'phone_number'];

    public function __construct()
    {
        parent::__construct();
        $this->table = $this->tables['users'];
    }

    public function checkIfUserExists($username,$password_hash)
    {
        $user = $this->where(['username' => $username, 'password_hash' => $password_hash])->first();
        return ($user) ? $user->id : false;
    }
}
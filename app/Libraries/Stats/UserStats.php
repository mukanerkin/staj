<?php

namespace App\Libraries\Stats;

use App\Models\UserModel;

class UserStats
{
    private $UserModel;

    public  $total_number_of_users                      = 0;
    public  $number_of_users_according_to_user_levels   = [];

    public function __construct()
    {
        $this->UserModel    = new UserModel;
        $this->getNumberOfUsersAccordingToUserLevels();
        $this->setNumberOfUsersAccordingToUserLevels();
    }

    private function getNumberOfUsersAccordingToUserLevels()
    {
        $this->number_of_users_according_to_user_levels = $this->UserModel->select('user_level, COUNT(id)as number')->groupBy('user_level')->findAll();
    }

    private function setNumberOfUsersAccordingToUserLevels()
    {
        foreach($this->number_of_users_according_to_user_levels as $i => $v){
            $this->total_number_of_users += $v->number;
            $this->number_of_users_according_to_user_levels[$v->user_level] = $v->number;
            unset($this->number_of_users_according_to_user_levels[$i]);
        }
    }
}
<?php

namespace App\Services;

use App\Entities\User;

class Authorization
{
    private $user;
    
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function is(string $user_level = '') : string|bool
    {
        if($user_level == '') return $this->getLevel();

        return $this->checkLevel($user_level);
    }

    private function getLevel() : string
    {
        return $this->user->user_level;
    }

    private function checkLevel(string $user_level) : bool
    {
        return $user_level == $this->user->level;
    }
}
<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class SystemSetting extends Entity
{
    protected $attributes = [
        'id'            => null,
        'setting_key'   => null,
        'setting_value' => null,
        'description'   => null,
        'created_at'    => null,
        'updated_at'    => null,
        'deleted_at'    => null,
    ];

    // Getter ile key-value dizisi formatına dönüştürebiliriz
    public function toKeyValue()
    {
        return [$this->setting_key => $this->setting_value];
    }
}
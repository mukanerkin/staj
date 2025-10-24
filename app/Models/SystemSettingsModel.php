<?php

namespace App\Models;

class SystemSettingsModel extends BaseModel
{
    protected $returnType     = \App\Entities\SystemSetting::class;

    protected $allowedFields = ['setting_key', 'setting_value', 'description'];

    public $data;

    public function __construct()
    {
        parent::__construct();
        $this->table    = $this->tables['system_settings'];
        $this->data     = $this->findAll();
    }

    public function getKeyIndexedObjectData()
    {
        $obj = new \stdClass();
        foreach ($this->data as $setting) {
            $obj->{$setting->setting_key} = new \stdClass();
            $obj->{$setting->setting_key}->value = $setting->setting_value;
            $obj->{$setting->setting_key}->description = $setting->description;
        }
        return $obj;
    }

    public function getKeyValueObject()
    {
        $obj = new \stdClass();
        foreach ($this->data as $setting) {
            $obj->{$setting->setting_key} = $setting->setting_value;
        }
        return $obj;
    }
}
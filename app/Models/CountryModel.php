<?php

namespace App\Models;

class CountryModel extends BaseModel
{
    protected $returnType     = \App\Entities\Country::class;

    protected $allowedFields = ['code_2', 'name'];

    public function __construct()
    {
        parent::__construct();
        $this->useSoftDeletes = false;
        $this->table = $this->tables['countries'];
    }

    public function getCountryByCode($code)
    {
        return $this->where('code_2',$code)->findColumn('name');
    }
}
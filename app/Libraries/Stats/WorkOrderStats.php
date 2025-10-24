<?php

namespace App\Libraries\Stats;

use App\Models\WorkOrderModel;

class WorkOrderStats
{
    private $WorkOrderModel;

    public  $pending_work_orders;

    public function __construct()
    {
        $this->WorkOrderModel       = new WorkOrderModel;
    }
}
<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BusService extends Model
{
    public $table='bus_services';
    public $timestamp='true';
    public function busii()
    {
    	return $this->belongsTo('App\Model\Business','business_id');
    }
}

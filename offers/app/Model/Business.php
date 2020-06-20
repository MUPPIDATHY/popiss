<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    public $table='businesses';
    public $timestamp='true';
    public function buscat()
    {
    	return $this->belongsTo('App\Model\BusCat','bus_cat_id');
    }
    public function service()
    {
    	return $this->hasMany('App\Model\BusService');
    }
    public function mulimage()
    {
    	return $this->hasMany('App\Model\BusMulimage');
    }
    
    public function review()
    {
    	return $this->hasMany('App\Model\Review');
    }
    public function offer()
    {
    	return $this->hasMany('App\Model\Offers');
    }
}

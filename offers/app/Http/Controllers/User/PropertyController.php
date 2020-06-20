<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Property;

class PropertyController extends Controller
{
   
    public function index()
    {
        $pro=Property::paginate(1);
        return view('list.properties',compact('pro'));
    }

    
    public function show($id)
    {
        $prop=Property::find($id);
        return view('list.properties-single',compact('prop'));
    }

    
}

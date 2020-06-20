<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Property;
use App\Model\Business;
use App\Model\BusCat;
class CategoryController extends Controller
{
   
    public function business($id)
    {
        $bus=Business::all();
        $buscat=BusCat::OrderBy('name','asc')->get();
        $buss=Business::where('buscat_id',$id)->paginate(2); 
        return view('list.list',compact('buss','bus','buscat'));
 
    } 
    
}

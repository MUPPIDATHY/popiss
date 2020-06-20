<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Business;
use App\Model\BusCat;
use App\Model\Offers;

class BusinessController extends Controller
{
    public function index()
    {
        $bus=Business::all();
        $buscat=BusCat::OrderBy('name','asc')->get();
        $buss=Business::paginate(2);
        return view('list.list',compact('buss','bus','buscat'));
    }

    public function show($id)
    {
        $bus=Business::find($id);
        $offer=Offers::where('status','active')->first();
        $business=Business::inRandomOrder()->get();
        return view('list.single-listing',compact('bus','business','offer'));
    }

}

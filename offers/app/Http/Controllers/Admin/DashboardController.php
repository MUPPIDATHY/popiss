<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Buscat;
use App\Model\Business;
use App\Model\Slider;
use App\Model\Contact;
use App\Model\Offers;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $buscat=Buscat::all();
        $bus=Business::all();
        $slider=Slider::all();
        $contact=Contact::all();
        $offer=Offers::all();
        return view("admin.dash",compact('buscat','bus','slider','contact','offer'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\BusCat;
use App\Model\Business;
use App\Model\BusMulimage;
use App\Model\BusOpen;
class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $buscat=BusCat::all();
        $bus=Business::all();
        return view("admin.business",compact('buscat','bus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $code=Business::orderBy('created_at', 'desc')->first();
        $bus=new Business;
        if (isset($code)) {
            // Sum 1 + last id
                    $bus->code        = 'POPB'.($code->id + 1);
                } else {
                    $bus->code        = 'POPB1';
                }
        $bus->buscat_id=$request->buscat_id;
        $bus->name=$request->name;
        $bus->address=$request->address;
        $bus->city=$request->city;
        $bus->state=$request->state;
        $bus->country=$request->country;
        $bus->phone=$request->phoneno;
        $bus->email=$request->email;
        $bus->image=base64_encode(file_get_contents($request->file('image')));
        $bus->desription=$request->desription;
        $bus->owner=$request->owner;
        $bus->ownimg=base64_encode(file_get_contents($request->file('ownimg')));
        $bus->save();
        
        foreach($request->mulimage as $img)
        {
            $i=new BusMulimage;
            $i->business_id= $bus->id;
            $i->mulimage = base64_encode(file_get_contents($img));
            $i->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bus=BusMulimage::where('business_id',$id)->get();
        return view('admin.busmulimage',compact('bus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bus=Business::find($id);
        $bus->code = $bus->code;       
        $bus->buscat_id=$request->buscat_id;
        $bus->name=$request->name;
        $bus->address=$request->address;
        $bus->city=$request->city;
        $bus->state=$request->state;
        $bus->country=$request->country;
        $bus->phone=$request->phoneno;
        $bus->email=$request->email;
        $imagee = $request->file('image');
        if($imagee == ''){
            $imagee = $bus->image;
        }else{
            $imagee = base64_encode(file_get_contents($request->file('image')));
        }
        $bus->image = $imagee;
        $bus->desription=$request->desription;
        $bus->owner=$request->owner;
        $image = $request->file('ownimg');
        if($image == ''){
            $image = $bus->ownimg;
        }else{
            $image = base64_encode(file_get_contents($request->file('ownimg')));
        }
        $bus->ownimg = $image;
        $bus->save();
        


        $im = $request->file('mulimage');
        if($im == ''){
            $im =BusMulimage::where('business_id',$id)->get();
            foreach($im as $imge)
        {
            $i=new BusMulimage;
            $i->business_id= $bus->id;
            $i->mulimage = $imge;
            $i->save();
        }

        }else{

            $img=BusMulimage::where('business_id',$id)->get();
        foreach($img as $im)
        {
            $im->delete();
        }
        foreach($request->mulimage as $imge)
        {
            $i=new BusMulimage;
            $i->business_id= $bus->id;
            $i->mulimage = base64_encode(file_get_contents($imge));
            $i->save();
        }

         
        }


        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus=Business::find($id);
        $bus->delete();
        return redirect()->back();
    }
}

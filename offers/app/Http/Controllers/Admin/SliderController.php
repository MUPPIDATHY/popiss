<?php
namespace App\Http\Controllers\Admin;
use App\Model\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
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
        $slider=Slider::all();
        return view("admin.slider",compact('slider'));
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
            $slider=new Slider;
            $slider->sort_order=$request->input('sort_order');
            $slider->slider = base64_encode(file_get_contents($request->file('slider')));;
            $slider->save();
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
        //
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
        $sli=Slider::find($id);
        $sli->sort_order=$request->input('sort_order');
        $image = $request->file('slider');
        if($image == ''){
            $image = $sli->slider;
        }else{
            $image = base64_encode(file_get_contents($request->file('slider')));
        }
        $sli->slider = $image;
        $sli->save();
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
        $sli=Slider::find($id);
        $sli->delete();
        return redirect()->back();
    }
}

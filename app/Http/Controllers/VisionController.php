<?php

namespace App\Http\Controllers;

use App\vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VisionController extends Controller
{
    public function index()
    {

        $datas = DB::table('visions')->get();
        $points = DB::table('vision_points')->get();
        return view('dashboard.common.vistable',compact('datas','points'));
    }

    public function create()
    {
        return view('dashboard.common.vision');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'head'=>'max:255|nullable',
        //     'title' => 'max:255|nullable',
        //     'points' => 'max:1000|nullable',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable'
        // ]);
        

        $info=new vision();
        $info->Heading=$request->head;
        $info->Title=$request->title;
        $info->Points=$request->points;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('vision/'), $imageName);
            $info->Image = $imageName;
        }



    $infosave = $info->save();
    if ($infosave) {
        return redirect()->route('vision')->with("success", "The record has been updated.");
    } else {
        return redirect()->route('vision')->with("error", "There is an error");
    }
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
        $datas=vision::find($id);
        return view('dashboard.common.visedit',compact('datas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id= $request->id;
        $info=vision::where("id", $id)->first();
        $info->Heading=$request->head;
        $info->Title=$request->title;
        $info->Points=$request->points;

        if ($request->hasFile("image")) {
            if ($info->image) {
                File::delete(public_path($info->Image));
            }
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('vision/'), $imageName);
            $info->Image = $imageName;
        }

    //     $info->update();

    //    return redirect()->route('vision');

    
            $infoupdate = $info->update();
            if ($infoupdate) {
                return redirect()->route('vision')->with("success", "The record has been updated.");
            } else {
                return redirect()->route('vision')->with("error", "There is an error");
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       // $data =whyus::where('id',$id)->first();
        $data = vision::find($id);
        if ($data->Image) {
            File::delete(public_path('vision/'.$data->Image));
        }
        $data->delete();


         return redirect()->route('vision')->with('success', 'Data has been deleted');
    }
}

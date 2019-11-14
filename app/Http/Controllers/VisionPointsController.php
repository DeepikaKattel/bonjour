<?php

namespace App\Http\Controllers;

use App\VisionPoints;
use Illuminate\Http\Request;


class VisionPointsController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('dashboard.common.vispoints');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
             'points' => 'max:400|nullable',
         ]);

        $info=new VisionPoints();
        $info->Points=$request->points;


        $infosave = $info->save();
        if ($infosave) {
            return redirect()->route('vision')->with("success", "The record has been stored");
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
        $datas=VisionPoints::find($id);
        return view('dashboard.common.vispointsedit',compact('datas'));

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
//        $request->validate([
//            'points' => 'max:400|nullable',
//        ]);

        $id= $request->id;
        $info=VisionPoints::where("id", $id)->first();
        $info=new VisionPoints();
        $info->Points=$request->points;


        $infoupdate = $info->update();
        if ($infoupdate) {
            return redirect()->route('vision')->with("success", "The record has been stored");
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
        $data = VisionPoints::find($id);
        $data->delete();

        return redirect()->route('vision')->with('success', 'Data has been deleted');
    }
}

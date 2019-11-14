<?php

namespace App\Http\Controllers;

use App\career2;
use App\Requirement;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index()
    {
        $datas=career2::orderBy('id','desc')->paginate(2);
        $requirement = Requirement::all();
        return view('dashboard.common.careertable2',compact('datas','requirement'));
    }

    public function create()
    {
        return view('dashboard.common.career2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title' => 'required|max:255',
        //     'body' => 'required|max:100000',
        //     'image' => 'image',
        // ]);
        

        $info=new career2();
        $info->Title=$request->title;
        $info->JobTitle=$request->jtitle;
        $info->JobDescription=$request->jdes;
        $info->Deadline=$request->dead;

        $info->save();

       return redirect()->route('job');
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
        $datas=career2::find($id);
        return view('dashboard.common.careeredit2',compact('datas'));

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
        $info=career2::where("id", $id)->first();
        $info->Title=$request->title;
        $info->JobTitle=$request->jtitle;
        $info->JobDescription=$request->jdes;
        $info->Deadline=$request->dead;

       $info->update();

       return redirect()->route('job');
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
        $data = career2::find($id)->delete();

        return redirect()->route('job')->with('success', 'Data has been deleted');
    }
}

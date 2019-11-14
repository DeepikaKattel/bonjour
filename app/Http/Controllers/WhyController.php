<?php

namespace App\Http\Controllers;

use App\whyus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WhyController extends Controller
{
    public function index()
    {
        $datas=whyus::orderBy('id','desc')->paginate(2);
        
        return view('dashboard.common.whytable',compact('datas'));
    }

    public function create()
    {
        return view('dashboard.common.why');
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
        //     'head' => 'max:255|nullable',
        //     'title' => 'max:255|nullable',
        //     'para' => 'max:1000|nullable',
        //     'para1' => 'max:1000|nullable',
        //     'para2' => 'max:1000|nullable',
        //     'para3' => 'max:1000|nullable',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable'
        // ]);
        
        $info=new whyus();
        $info->Heading=$request->head;
        $info->Title=$request->title;
        $info->Paragraph=$request->para;
        $info->Paragraph1=$request->para1;
        $info->Paragraph2=$request->para2;
        $info->Paragraph3=$request->para3;

        
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('whyus/'), $imageName);
        $info->Image = $imageName;

        // $info->save();

        $infosave = $info->save();
        if ($infosave) {
            return redirect()->route('introduction')->with("success", "The record has been stored");
        } else {
            return redirect()->route('introduction')->with("error", "There is an error");
        }

    //    return redirect()->route('introduction');
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
        $datas=whyus::find($id);
        return view('dashboard.common.whyedit',compact('datas'));

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
        $info=whyus::where("id", $id)->first();
        $info->Heading=$request->head;
        $info->Title=$request->title;
        $info->Paragraph=$request->para;
        $info->Paragraph1=$request->para1;
        $info->Paragraph2=$request->para2;
        $info->Paragraph3=$request->para3;

        
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('whyus/'), $imageName);
        $info->Image = $imageName;

    //    $info->update();

    //    return redirect()->route('introduction');

        $infoupdate = $info->update();
        if ($infoupdate) {
            return redirect()->route('introduction')->with("success", "The record has been updated.");
        } else {
            return redirect()->route('introduction')->with("error", "There is an error");
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
        $data = whyus::find($id);

        if ($data->Image) {
            File::delete(public_path('whyus/'.$data->Image));
        }
        $data->delete();

        return redirect()->route('introduction')->with('success', 'Data has been deleted');
    }
}

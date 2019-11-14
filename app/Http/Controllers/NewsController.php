<?php

namespace App\Http\Controllers;

use App\Model\announcement;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $datas=News::orderBy('id','desc')->paginate(2);
        
        return view('dashboard.coverage.newstable',compact('datas'));
    }

    public function create()
    {
        return view('dashboard.coverage.news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info=new News();
        $info->Heading1=$request->head1;
        $info->Content1=$request->content1;
        $info->Heading2=$request->head2;
        $info->Content2=$request->content2;
        $info->Heading3=$request->head3;
        $info->Content3=$request->content3;

        $infosave = $info->save();
        if ($infosave) {
            return redirect()->back()->with("success", "The record has been stored");
        } else {
            return redirect()->back()->with("error", "There is an error");
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
        $datas=News::find($id);
        return view('dashboard.coverage.newsedit',compact('datas'));

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
        $info=News::where("id", $id)->first();
        $info->Heading1=$request->head1;
        $info->Content1=$request->content1;
        $info->Heading2=$request->head2;
        $info->Content2=$request->content2;
        $info->Heading3=$request->head3;
        $info->Content3=$request->content3;

       $info->update();

       return redirect()->route('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $data = News::find($id)->delete();

        return redirect()->route('news')->with('success', 'Data has been deleted');
    }
    public function news()
    {
        $data = News::all();
        return view('dashboard.coverage.newscontent', compact('data'));
    }
}

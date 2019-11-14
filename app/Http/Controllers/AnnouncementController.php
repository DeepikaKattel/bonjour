<?php

namespace App\Http\Controllers;

use App\Model\announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = announcement::all();
        return view('dashboard.coverage.announcement.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.coverage.announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $announcement = new announcement();
        $announcement->title1 = $request->title1;
        $announcement->announcement1 = $request->announcement1;
        $announcement->title2 = $request->title2;
        $announcement->announcement2 = $request->announcement2;
        $announcementsave = $announcement->save();
        if ($announcementsave) {
            return redirect()->route('announcement.index')->with("success", "The record has been stored");
        } else {
            return redirect()->route('announcement.index')->with("error", "There is an error");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = announcement::find($id);
        return view('dashboard.coverage.announcement.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $announcement = announcement::find($id);
        $announcement->title1 = $request->title1;
        $announcement->announcement1 = $request->announcement1;
        $announcement->title2 = $request->title2;
        $announcement->announcement2 = $request->announcement2;
        $success = $announcement->update();
        if ($success) {
            return redirect()->route('announcement.index')->with("success", "Member successfully updated");
        } else {
            return redirect()->route('announcement.index')->with("error", "Error while updating member information");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = announcement::find($id);
        $datas->delete();
        return redirect()->route('announcement.index');
    }
    public function announcement()
    {
        $data = announcement::all();
        return view('dashboard.coverage.announcement', compact('data'));
    }
}

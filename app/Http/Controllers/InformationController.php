<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = Information::all();
        return view('dashboard.information.index', compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $information = Information::all();
        return view('dashboard.information.create', compact('information'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|min:10|',
        ]);
        $information = new Information();
        $information->address = request('address');
        $information->email = request('email');
        $information->phone = request('phone');
        $information->save();
        return redirect('/information');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $information = Information::find($id);
        return view('dashboard.information.edit', compact('information'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|min:10|',
        ]);
        $information = Information::find($id);
        $information->address = $request->address;
        $information->email = $request->email;
        $information->phone = $request->phone;

        $information->save();
        return redirect('/information');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $information = Information::find($id)->delete();
        return redirect('/information');
    }
}

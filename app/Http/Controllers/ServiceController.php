<?php

namespace App\Http\Controllers;

use App\Service;
use App\Product;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        $product = Product::all();
        return view('dashboard.services.index', compact('service', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Service $service)
    {
        $validatedData = request()->validate([
            'sub_heading1' => 'required',
            'sub_heading2' => 'required',
            'content1' => 'required',
            'content2' => 'required',

        ]);
        $service = new Service();
        $service->sub_heading1 = request('sub_heading1');
        $service->content1 = request('content1');
        $service->sub_heading2 = request('sub_heading2');
        $service->content2 = request('content2');
        $service->save();
        return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('dashboard.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'sub_heading1' => 'required',
            'sub_heading2' => 'required',
            'content1' => 'required',
            'content2' => 'required',

        ]);
        $service = Service::find($id);
        $service->sub_heading1 = $request->sub_heading1;
        $service->content1 = $request->content1;
        $service->sub_heading2 = $request->sub_heading2;
        $service->content2 = $request->content2;
        $service->save();
        return redirect('/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $information = Service::find($id)->delete();
        return redirect('/services');
    }
}

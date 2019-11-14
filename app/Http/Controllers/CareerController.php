<?php

namespace App\Http\Controllers;


use App\Model\career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $career = DB::table('career2s')->get();
        $requirement = DB::table('requirements')->get();
        return view('dashboard.career.create',compact('career','requirement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $validatedData = request()->validate([

            'idimg' => 'required|image|mimes:jpeg|max:2048',
            'cv' => 'required|max:10000|mimes:pdf',
            'pp' => 'required|image|mimes:jpeg|max:2048',
            'email' => 'required|email',
            'name' => 'required',
            'idnum' => 'required',
            'phone' => 'required|min:10',
            'district' => 'required',
            'municipality' => 'required',
            'street' => 'required',
            'zip' => 'required',
            'criminal' => 'required',
            'duty' => 'required',
            'deadline' => 'required',
            'skills' => 'required',
            'language' => 'required',
            'work' => 'required',
            'salary' => 'required',
            'education' => 'required',
            'university' => 'required',
            'skills' => 'required',
            'apply' => 'required',
            'zip' => 'required',
            'message' => 'required',

        ]);
        //        dd($request->duty);
        $career = new career();
        $career->name = $request->name;
        $career->idnum = $request->idnum;
        $career->phone = $request->phone;
        $career->email = $request->email;
        $career->fathername = $request->fathername;
        $career->mothername = $request->mothername;
        $career->district = $request->district;
        $career->municipality = $request->municipality;
        $career->ward = $request->ward;
        $career->street = $request->street;
        $career->zip = $request->zip;
        $career->criminal = $request->criminal;
        $career->duty = $request->duty;
        $career->deadline = $request->deadline;
        $career->skills = $request->skills;
        $career->language = $request->language;
        $career->salary = $request->salary;
        $career->work = $request->work;
        $career->education = $request->education;
        $career->university = $request->university;
        $career->apply = $request->apply;
        $career->zip = $request->zip;
        $career->message = $request->message;
        if ($request->hasFile('idimg')) {
            $idimg = $request->idimg;
            $fileName = time() . "." . $idimg->getClientOriginalExtension();
            $destination_path = public_path("careers/");
            $idimg->move($destination_path, $fileName);
            $career->idimg = 'careers/' . $fileName;
        }
        if ($request->hasFile('cv')) {
            $cv = $request->cv;
            $fileName = time() . "." . $cv->getClientOriginalExtension();
            $destination_path = public_path("careers/");
            $cv->move($destination_path, $fileName);
            $career->cv = 'careers/' . $fileName;
        }
        if ($request->hasFile('pp')) {
            $pp = $request->pp;
            $fileName = time() . "." . $pp->getClientOriginalExtension();
            $destination_path = public_path("careers/");
            $pp->move($destination_path, $fileName);
            $career->pp = 'careers/' . $fileName;
        }
        $careersave = $career->save();
        if ($careersave) {
            return redirect()->back()->with("success", "The record has been stored");
        } else {
            return redirect()->back()->with("error", "There is an error");
        }

    }
  
}
        


    /**
     * Display the specified resource.
     *
     * @param  \App\career  $career
     * @return \Illuminate\Http\Response
     */
    // public function show(career $career)
    // { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\career  $career
     * @return \Illuminate\Http\Response
     */
    // public function edit(career $career)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\career  $career
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, career $career)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\career  $career
     * @return \Illuminate\Http\Response
     */
    // public function destroy(career $career)
    // {
    //     //
    // }


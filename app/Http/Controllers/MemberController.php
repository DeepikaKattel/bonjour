<?php

namespace App\Http\Controllers;

use App\Model\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MemberController extends Controller
{
    /*public function table()
    {
        //return view('dashboard.common.table');
    }
    public function create()
    {
        return view('dashboard.common.table');
    }*/
    public function create()
    {
        return view('dashboard.common.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'home' => 'required',
            'image' => 'required',
            'background' => 'required',
        ]);
        $member = new Member();
        $member->home = $request->home;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $fileName = time() . "." . $image->getClientOriginalExtension();
            $destination_path = public_path("member/");
            $image->move($destination_path, $fileName);
            $member->image = 'member/' . $fileName;
        }
        if ($request->hasFile('background')) {
            $background = $request->background;
            $fileName = time() . "." . $background->getClientOriginalExtension();
            $destination_path = public_path("member/");
            $background->move($destination_path, $fileName);
            $member->background = 'member/' . $fileName;
        }
        $membersave = $member->save();
        if ($membersave) {
            return redirect()->route('home')->with("success", "The record has been stored");
        } else {
            return redirect()->route('home')->with("error", "There is an error");
        }
    }
    public function edit(Request $request)
    {
        $data = Member::find($request->id)->first();
        return view('dashboard.common.edit', compact('data'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'background' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'home' => 'required',

        ]);
        $member = Member::find($request->id);
        $member->home = $request->home;
        if ($request->hasFile("image")) {
            if ($member->image) {
                File::delete(public_path($member->image));
            }
            $image = $request->image;
            $fileName = time() . "." . $image->getClientOriginalExtension();
            $destination_path = public_path("member/");
            $image->move($destination_path, $fileName);

            $member->image = 'member/' . $fileName;
        }
        if ($request->hasFile("background")) {
            if ($member->background) {
                File::delete(public_path($member->background));
            }
            $background = $request->background;
            $fileName = time() . "." . $background->getClientOriginalExtension();
            $destination_path = public_path("member/");
            $background->move($destination_path, $fileName);
            $member->background = 'member/' . $fileName;
        }
        $success = $member->update();
        if ($success) {
            return redirect()->route('home')->with("success", "Member successfully updated");
        } else {
            return redirect()->route('home')->with("error", "Error while updating member information");
        }
    }
    public function destroy($id)
    {
        $datas = Member::find($id);
        if ($datas->background) {
            File::delete(public_path($datas->background));
        }
        if ($datas->image) {
            File::delete(public_path($datas->image));
        }
        $datas->delete();
        return redirect()->route('home');
    }
}

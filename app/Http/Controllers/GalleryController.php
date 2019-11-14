<?php

namespace App\Http\Controllers;

use DB;
use App\Model\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('galleries')->get();

        return view('dashboard.coverage.gallery.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.coverage.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ]);
        $gallery = new gallery();
        if ($request->hasFile('image1')) {
            $image1 = $request->image1;
            $fileName = rand() . "." . $image1->getClientOriginalExtension();
            $destination_path = public_path("gallery/");
            $image1->move($destination_path, $fileName);
            $gallery->image1 = 'gallery/' . $fileName;
        }
        if ($request->hasFile('image2')) {
            $image2 = $request->image2;
            $fileName = rand() . "." . $image2->getClientOriginalExtension();
            $destination_path = public_path("gallery/");
            $image2->move($destination_path, $fileName);
            $gallery->image2 = 'gallery/' . $fileName;
        }
        if ($request->hasFile('image3')) {
            $image3 = $request->image3;
            $fileName = rand() . "." . $image3->getClientOriginalExtension();
            $destination_path = public_path("gallery/");
            $image3->move($destination_path, $fileName);
            $gallery->image3 = 'gallery/' . $fileName;
        }
        if ($request->hasFile('image4')) {
            $image4 = $request->image4;
            $fileName = rand() . "." . $image4->getClientOriginalExtension();
            $destination_path = public_path("gallery/");
            $image4->move($destination_path, $fileName);
            $gallery->image4 = 'gallery/' . $fileName;
        }
        $gallerysave = $gallery->save();
        if ($gallerysave) {
            return redirect()->route('galleries.index')->with("success", "The record has been stored");
        } else {
            return redirect()->route('galleries.index')->with("error", "There is an error");
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
    public function edit(Request $request)
    {
        $data = gallery::find($request->id)->first();
        return view('dashboard.coverage.gallery.edit', compact('data'));
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
        $gallery = gallery::find($request->id);
        if ($request->hasFile("image1")) {
            if ($gallery->image1) {
                File::delete(public_path($gallery->image1));
            }
            $image1 = $request->image1;
            $fileName = time() . "." . $image1->getClientOriginalExtension();
            $destination_path = public_path("gallery/");
            $image1->move($destination_path, $fileName);

            $gallery->image = 'gallery/' . $fileName;
        }
        if ($request->hasFile("image2")) {
            if ($gallery->background) {
                File::delete(public_path($gallery->background));
            }
            $image2 = $request->image2;
            $fileName = time() . "." . $image2->getClientOriginalExtension();
            $destination_path = public_path("gallery/");
            $image2->move($destination_path, $fileName);
            $image2->background = 'gallery/' . $fileName;
        }
        if ($request->hasFile("image3")) {
            if ($gallery->background) {
                File::delete(public_path($gallery->background));
            }
            $image3 = $request->image3;
            $fileName = time() . "." . $image3->getClientOriginalExtension();
            $destination_path = public_path("gallery/");
            $image3->move($destination_path, $fileName);
            $image3->background = 'gallery/' . $fileName;
        }
        if ($request->hasFile("image4")) {
            if ($gallery->background) {
                File::delete(public_path($gallery->background));
            }
            $image4 = $request->image4;
            $fileName = time() . "." . $image4->getClientOriginalExtension();
            $destination_path = public_path("gallery/");
            $image4->move($destination_path, $fileName);
            $image4->background = 'gallery/' . $fileName;
        }
        $success = $gallery->update();
        if ($success) {
            return redirect()->route('galleries.index')->with("success", "Member successfully updated");
        } else {
            return redirect()->route('galleries.index')->with("error", "Error while updating member information");
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
        $datas = gallery::find($id);
        if ($datas) {
            File::delete(public_path($datas->image1));
            File::delete(public_path($datas->image2));
            File::delete(public_path($datas->image3));
            File::delete(public_path($datas->image4));
        }
        $datas->delete();
        return redirect()->route('galleries.index');
    }
    public function gallery()
    {
        $data = gallery::all();
        return view('dashboard.coverage.gallery', compact('data'));
    }
}

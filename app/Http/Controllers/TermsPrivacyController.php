<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsPrivacyController extends Controller
{
    public function terms(){
        return view('dashboard.TermsPrivacy.terms');
    }

    public function privacy(){
        return view('dashboard.TermsPrivacy.privacy');
    }
}

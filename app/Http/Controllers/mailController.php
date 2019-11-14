<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class mailController extends Controller
{
    public function send(Request $request)
    {
        $data = array(
            'name' => $request['name'],
            'citizen' => $request['idnum'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'fathername' => $request['fathername'],
            'mothername' => $request['mothername'],
            'district' => $request['district'],
            'municipality' => $request['municipality'],
            'ward' => $request['ward'],
            'zip' => $request['zip'],
            'criminal' =>$request['criminal'],
            'duty' =>$request['duty'],
            'deadline' =>$request['deadline'],
            'skills' =>$request['skills'],
            'language' =>$request['language'],
            'salary' =>$request['salary'],
            'work' =>$request['work'],
            'education' =>$request['education'],
            'university' =>$request['university'],
            'apply' =>$request['apply'],
            'message' =>$request['message'],
            'citizenship'=>$request->file('idimg'),
            'cv'=>$request->file('cv'),
            'pp'=>$request->file('pp')
        );

        Mail::send('mail', ['data' => $data], function($message) use($data){
            $message->to('ashmin.karki1996@gmail.com', 'Notification')->subject
            ('Application');
            $message->from('deepika.kattel80@gmail.com','Deepika');

            $message->attach($data['citizenship']->getRealPath(),array(
                    'as' => $data['citizenship']->getClientOriginalName(),
                    'mime' => $data['citizenship']->getMimeType()
                )
            );
            $message->attach($data['cv']->getRealPath(),array(
                    'as' => $data['cv']->getClientOriginalName(),
                    'mime' => $data['cv']->getMimeType()
                )
            );
            $message->attach($data['pp']->getRealPath(),array(
                    'as' => $data['pp']->getClientOriginalName(),
                    'mime' => $data['pp']->getMimeType()
                )
            );
        });
        echo "Email sent. Thank you.";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class HomeController extends Controller
{

    public function index() {
        return view('index');
    }


    public function ContactUsForm(Request $request) {


        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'msg' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('ArturSh0101@gmail.com', 'Admin')->subject("Tesvan");
            
           
 /*      $message->attach($request->file('file')->getRealPath(), [
        'as' => $request->file('file')->getClientOriginalName(), 
        'mime' => $request->file('file')->getMimeType()
     ]); */

        });

        return redirect("/#contact-us")->with('success', 'We have received your message. Thank you!');
    }

}

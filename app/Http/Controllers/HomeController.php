<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class HomeController extends Controller
{
    //

    public function index() {
        return view('index');
    }


    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
/*             'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required' */
         ]);


        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
        ), function($message) use ($request){
            /* $message->from($request->email); */
            $message->to('ArturSh0101@gmail.com', 'Admin')->subject($request->get('subject'));
            
           
 /*      $message->attach($request->file('file')->getRealPath(), [
        'as' => $request->file('file')->getClientOriginalName(), 
        'mime' => $request->file('file')->getMimeType()
     ]); */

        });

        return redirect("/#contact-us")->with('success', 'We have received your message and would like to thank you for writing to us.');
    }


}

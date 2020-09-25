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
            $message->from('davidg.tesvan@gmail.com');
            $message->to('info@tesvan.com', 'Admin')->subject("Tesvan");

        });

        return redirect("/#contact-us")->with('success', 'We have received your message. Thank you!');
    }

}

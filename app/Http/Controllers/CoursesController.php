<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //

    public function index() {
        return view('courses/courses');
    }


    public function CoursesRegister(Request $request) {


        //  Send mail to admin
        \Mail::send('courses_mail', array(
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'city' => $request->get('city'),
            'education' => $request->get('education'),
            'level' => $request->get('level'),
            'msg' => $request->get('message'),
        ), function($message) use ($request){
            $message->from("davidg.tesvan@gmail.com");
            $message->to('davidg@tesvan.com', 'Admin')->subject("Tesvan");
            
         });

        return redirect("courses#courses-register")->with('success', 'We have received your message. Thank you!');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    //

    public function index() {
        return view('job/job');
    }

    public function JobApply(Request $request) {


        //  Send mail to admin
        \Mail::send('job_mail', array(
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'city' => $request->get('city'),
            'education' => $request->get('education'),
            'company' => $request->get('company'),
            'course' => $request->get('course'),
            'level' => $request->get('level'),
        ), function($message) use ($request){
            $message->from("davidg.tesvan@gmail.com");
            $message->to('jobs@tesvan.com', 'Admin')->subject("Tesvan");
            
             $message->attach($request->file('cv')->getRealPath(), [
               'as' => $request->file('cv')->getClientOriginalName(), 
               'mime' => $request->file('cv')->getMimeType()
            ]);

         });

        return redirect("job#job-apply")->with('success', 'We have received your message. Thank you!');
    }
}

<?php

// namespace App\Http\Controllers;
// use App\Mail\contactMail;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail; 

// class ContactController extends Controller
// {
//     public function contact()
//     {
// return view("web.contact");
//     }

//     public function sendEmail(Request $request)
//     {
//       $details=[
//      'name'=>$request->name,
//      'email'=>$request->email,
//      'message'=>$request->message,
//       ];
//       Mail::to('ttooffee23@gmail.com')->send(new contactMail($details));
//       return back()->with('message_send','Your Message has been successfully!');
//     }


// }

// app/Http/Controllers/ContactController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('ttooffee23@gmail.com')->send(new ContactMail($details));

        return back()->with('message', 'Message sent successfully!');
    }

    
}


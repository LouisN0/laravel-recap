<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function storeContactForm(Request $request) 
    { 
        $request->validate([ 
            'email' => 'required|email', 
        ]); 
        $input = $request->all(); 
        //  Send mail to admin 
        Mail::send('mails.newsletter', array( 
            'email' => $input['email'], 
        ), function($message) use ($request){ 
            $message->from('lounol.co@gmail.com', 'Admin'); 
            $message->to($request->email);
        }); 
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}

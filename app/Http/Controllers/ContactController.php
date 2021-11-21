<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\About;
use Illuminate\Http\Request;
use Validator;
use Mail; 

class ContactController extends Controller { 

  
  public function showContact() {
    $about = About::first();
    return view('admin.includes.contact')->with([
        'about' => $about
     ]);
}


    public function store(Request $request) { 
      $emailtosend = About::first()->email;
      Mail::send('emails.contact', [
        'name' => $request->name,
        'mail' => $request->mail,
        'subject' => $request->subject,
        'msg' => $request->message
      ], function($mail) use($request){
        $mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
        $mail->to($emailtosend)->subject($request->name .' a un.e '. $request->subject. ' pour vous !');
      });

      return "Message sent!!!";

  }
}


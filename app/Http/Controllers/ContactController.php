<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Validator;
use Mail; 

class ContactController extends Controller { 

    public function store(Request $request) { 

      // $request->validate([
      //     'name' => 'required',
      //     'mail' => 'required|mail',
      //     'subject' => 'required',
      //     'message' => 'required'
      // ]);

      Mail::send('emails.contact', [
        'name' => $request->name,
        'mail' => $request->mail,
        'subject' => $request->subject,
        'msg' => $request->message
      ], function($mail) use($request){
        $mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
        $mail->to(env('MAIL_USERNAME'))->subject($request->name .' a un.e '. $request->subject. ' pour vous !');
      });
      return "Message sent!!!";

  }
}


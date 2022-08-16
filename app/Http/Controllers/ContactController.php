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

      $mailData = [
         'name' => $request->name,
        'mail' => $request->mail,
        'subject' => $request->subject,
        'msg' => $request->message
      ]; 

      Mail::to($emailtosend)->send(new \App\Mail\Contact($mailData));

      return "Message sent!!!";

  }
}


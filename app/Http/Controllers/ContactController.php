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

      $validator = Validator::make($request->all(), [
        'name' => 'required|min:3',
        'subject' => 'required',
        'mail' => 'required|max:255|email:rfc,dns',
        'message' => 'required|min:3',
    ]);
    
    if ($validator->fails()) {
        return redirect(url()->previous(). '#contact')->withErrors($validator)->withInput();
    } else {
        $emailtosend = About::first()->email;

        $mailData = [
          'name' => $request->name,
          'mail' => $request->mail,
          'subject' => $request->subject,
          'msg' => $request->message
        ]; 

        Mail::to($emailtosend)->send(new \App\Mail\Contact($mailData));

        return  redirect(url()->previous())->with('contact-success', 'Nous avons bien reçu votre formulaire 👌 On revient vers vous dés que possible');
    }

  }
}


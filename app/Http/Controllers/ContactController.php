<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        $name = $request->input('name');
        $mail = $request->input('email');
        $message = $request->input('message');
        $content = compact('name', 'mail', 'message'); 

        

        Mail::to('admin@miosito.it')->send(new ContactMail($content));

        

        return redirect()->back()->with('status', "Grazie per avermi contattato!");
    }

    public function inviamail() 
    {
        return view('mail.contact'); 
    }
}

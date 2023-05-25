<?php

namespace App\Http\Controllers;


use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactControoler extends Controller
{
    public function index()
    {
        return view('html.contact');
    }

    public function submit(Request $request )
    {
       Mail::to('mohmmed.kefah.2001@gmailcom')->send(new ContactMail($request));
       return redirect('contact');
    }
}

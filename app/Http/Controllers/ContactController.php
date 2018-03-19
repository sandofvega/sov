<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactToMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        $contact->message = $request->get('message');
        $contact->save();

        $this->sendMail($request->all());
    }

    private function sendMail($formData)
    {
        Mail::to('yasin@sandofvega.com')->send(new ContactToMe($formData));
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactFormRequest $request)
    {
        $validated = $request->validated();

        // Send email
        Mail::to('harrisfiaz3@gmail.com')->send(new ContactFormMail($validated));

        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Thank you for your message. I will get back to you soon.');
    }
}

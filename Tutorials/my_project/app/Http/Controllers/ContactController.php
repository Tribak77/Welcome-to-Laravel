<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Display the contact form
    public function create()
    {
        return view('contact');
    }

    // Handle form submission and send the email
    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Prepare email sending
        Mail::send('emails.contact', $validatedData, function ($message) use ($validatedData) {
            $message->to('your_email@example.com', 'Recipient')
                    ->subject('New Contact Message from ' . $validatedData['name']);
        });

        // Redirect back with a success message
        return redirect()->route('contact.create')->with('success', 'Your message has been sent successfully.');
    }
}

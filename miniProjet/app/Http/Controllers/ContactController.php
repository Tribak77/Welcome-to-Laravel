<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ;

class ContactController extends Controller
{
    public function create(){
        return view('contact') ;
    }

    public function store(request $request){
        //valider les données 
        $data = $request ->validate([
            "name" => 'required|string' ,
            "email" => 'required|email',
            "subject" => 'required' ,
            "msg" => 'required' 
        ]);

        //envoi de l'email
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('tribak.ayoub.solicode@gmail.com')
                    ->subject('New Contact Message from' . $data['name']);
        });
        

        // Rediriger après l'envoi
        return redirect('/contact')->with('success', 'Votre message a bien été envoyé.');
    }
}

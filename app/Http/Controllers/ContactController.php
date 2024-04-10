<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'naam',
            'email',
            'telefoon',
            'bericht'
        ]);

        // Insert validated data
        Contact::create($request->all());

        // Redirect user to contact with success message
        return redirect()->route('contact')->with('message', 'Uw bericht is verstuurd!');
    }
}

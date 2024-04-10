<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'naam',
            'email',
            'telefoon',
            'bericht'
        ]);

        Contact::create($request->all());

        return redirect()->route('contact')->with('message', 'Uw bericht is verstuurd!');
    }
}

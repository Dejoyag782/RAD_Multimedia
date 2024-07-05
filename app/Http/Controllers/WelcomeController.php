<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;

class WelcomeController extends Controller
{

    

    public function index()
    {
        return view('welcome');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'desc' => 'required|string',
        ]);

        $contact = Messages::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'desc' => $validatedData['desc'],
            'archived' => 0, // Setting archived to default value
        ]);

        // Optionally, you can return a response or redirect
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}

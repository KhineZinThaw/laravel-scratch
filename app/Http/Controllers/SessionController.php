<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //validate the request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //based on provided crenditials
        if(auth()->attempt($attributes)) {
            //session fixation
            session()->regenerate();
            
            //redirect
            return redirect('/')->with('success', 'Welcome Back!');
        }

        //auth failed
        throw ValidationException::withMessages([
            'email' => 'Your email could not be verified'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}

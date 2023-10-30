<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function page()
    {
        return view('partials.register');
    }

    public function register(Request $request)
    {
        // TODO: Validate for secure password
        try {

            $request->validate([
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|max:255',
                'confirmPassword' => 'required|same:password',
            ]);
        } catch (\Throwable $th) {
            return redirect('/register')->with('error', 'Invalid data');
        }

        $user = new \App\Models\User;
        $user->name = 'New User';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login');
    }
}

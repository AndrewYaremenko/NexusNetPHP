<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|alpha_dash|min:5|max:255',
            'firstName' => 'required|max:255',
            'lastName' => 'max:255',
        ]);

        User::create([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
        ]);

        return redirect()->route('home')->with('info', 'Your account has been can created and you can now sign in!');
    }

    public function getSignin()
    {
        return view('signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
            return redirect()->back()->with('info', 'Could not sign you in with those details!');
        };

        return redirect()->route('home')->with('info', 'Your has been login!');
    }

    public function getSignout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}

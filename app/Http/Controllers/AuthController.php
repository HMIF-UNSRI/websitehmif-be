<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView (){
        $title = 'Login';
        return view('auth.login', compact('title'));
    }

    public function login (Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();

        if($user && $user->password === $password){
            Auth::login($user);
            return redirect()->intended(route('dashboard.index'));
        }else{
            return redirect(route('auth.login'))->withErrors('invalid email or password');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('auth.login'));
    }

}

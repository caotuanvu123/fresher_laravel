<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // validates
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect(route('admin.product.index'));
        }

        return redirect()->back()->with('login-failed', 'Authenticate failed !');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('authenticate'));
    }
}

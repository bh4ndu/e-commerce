<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function showRegistrationForm() {
        if(Auth::check()) {
            return redirect('/home'); 
         }
        return view('auth.register');
    }
    

    public function register(RegisterRequest $request) {
        $user = User::create($request->validated());
        return redirect('/login')->with('success', 'user created successfully');
    }
}

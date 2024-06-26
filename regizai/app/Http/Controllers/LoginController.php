<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\User;

class LoginController extends Controller
{
    //

    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } else { 
            return view('auth.login');
        }
    }

    public function actionLogin(Request $request) 
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );

        $kredensil = $request->only('email', 'password');
        
        if(Auth::attempt($kredensil))
        {
            $user = Auth::user();
            if ($user->gender == "male" || $user->gender == "female") {
                return redirect('dashboard');
            } else if ($user->gender == null) {
                return redirect('choosegender');
            }
        }
        return Redirect::to('/')->with('alert-gagal','Username atau Password salah!');
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}

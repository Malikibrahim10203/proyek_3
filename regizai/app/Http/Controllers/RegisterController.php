<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    //
    public function register()
    {
        return view('auth.signup');
    }

    public function gender(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        return view('auth.chooseGender', ["email"=>$email, "password"=>$password]);
    }

    public function biodata(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $gender = $request->gender;
        
        return view('auth.biodata', ["email"=>$email, "password"=>$password, "gender"=>$gender]);
    }

    public function actionRegister(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'name' => $request->name,
            'birth' => $request->birth,
            'width' => $request->width,
            'height' => $request->height,
        ]);

        $user = Auth::user()->id;

        if ($user == NULL) {
            Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
            return redirect('login');
        } else {
            Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
            return redirect('dashboard');
        }
    }
}

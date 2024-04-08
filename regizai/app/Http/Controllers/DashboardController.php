<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function index()
    {

        $name = Auth::User()->name;

        if(!Auth::check())
        {
            return redirect('/');
        } else {
            $user = Auth::user();
            if ($user->gender == "male" || $user->gender == "female") {
                return view('dashboard', ['name' => $name]);
            } else if ($user->gender == null) {
                return redirect('choosegender');
            }
        }
    }
}

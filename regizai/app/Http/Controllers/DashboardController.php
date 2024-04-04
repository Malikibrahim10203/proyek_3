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
            return view('dashboard', ['name' => $name]);
        }
    }
}

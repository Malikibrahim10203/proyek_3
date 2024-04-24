<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //
    public function Index()
    {
        $user = Auth::user();


        return view('/page/profile', ["user"=>$user]);
    }
}

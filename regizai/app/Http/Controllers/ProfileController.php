<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DateTime;

class ProfileController extends Controller
{
    //
    public function Index()
    {
        $user = Auth::user();


        $lahir = new DateTime($user->birth);
        $today = new DateTime("today");
        $hasil = date_diff($lahir, $today);
        $y = $hasil->format('%Y');

        return view('/page/profile', ["user"=>$user, "y"=>$y]);
    }
}

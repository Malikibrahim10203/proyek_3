<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function index()  
    {
        
        if(isset($_POST['calculate'])) {
            $width  = $_POST['width'];
            $height = $_POST['height'];
            
            $BMI = $height / ($width * $width);

            return view('page/calculator',["BMI"=>$BMI]);
        } else {
            $BMI = 0;
            return view('page/calculator',["BMI"=>$BMI]);
        }
    }
}

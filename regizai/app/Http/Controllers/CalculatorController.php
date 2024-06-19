<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CalculatorController extends Controller
{
    //
    public function index()  
    {
        
        $BMI = ['0','0','0.00'];
        return view('page/calculator')->with('BMI', $BMI);
    }

    public function calculateBMI(Request $request)
    {
        $request->validate([
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ]);

        $weight = $request->input('weight');
        $height = $request->input('height');

        $client = new Client();
        $response = $client->request('GET', 'https://body-mass-index-bmi-calculator.p.rapidapi.com/metric', [
            'query' => [
                'weight' => $weight,
                'height' => $height,
            ],
            'headers' => [
                'X-RapidAPI-Host' => 'body-mass-index-bmi-calculator.p.rapidapi.com',
                'X-RapidAPI-Key' => '1a918cc994msh68ae3bd669dbe12p10ad09jsn61c8f959d258',
            ],
        ]);

        $BMI = json_decode($response->getBody(), true);

        return view('page/calculator', ['BMI' => $BMI]);
    }

}

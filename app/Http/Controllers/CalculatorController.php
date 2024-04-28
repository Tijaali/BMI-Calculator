<?php

namespace App\Http\Controllers;

use App\Models\Calculator;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function recommend($bmi) {
        return view('client.recommendations',['bmi' => $bmi]);
    }
    public function create(){
        return view('client.calculator');
        
    }
    public function store(Request $request)
    {
        $height =$request->height;
        $weight = $request->weight;
        $height_m=$height/100;
        $bmi = $weight / ($height_m * $height_m);
        Calculator::create([
            'height' => $height,
            'weight' => $weight,
            'bmi' => $bmi,
        ]);
        
        return redirect()->route('recommendations',['bmi' => $bmi]);
    }
}

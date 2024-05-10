<?php

namespace App\Http\Controllers;

use App\Models\Calculator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CalculatorController extends Controller
{
    
    public function create(){
        return view('client.calculator');
        
    }
    public function store(Request $request)
    {
        $height =$request->height;
        $weight = $request->weight;
        $height_m=$height/100;
        $bmi = $weight / ($height_m * $height_m);
        $user = auth()->user()->id;
        Calculator::create([
            'height' => $height,
            'weight' => $weight,
            'bmi' => $bmi,
            'user_id' => $user,
        ]);
        
        return redirect()->route('recommendations',['bmi' => $bmi]);
    }
    public function recommend($bmi) {
        $user = auth()->user(); 
        $userId = $user->id;
        $usersAndBmis = DB::table('users')
            ->join('calculators', 'users.id', '=', 'calculators.user_id')
            ->select('users.*', 'calculators.*')
            ->where('users.id', $userId) 
            ->get()
            ->toArray();
       
        // dd($usersAndBmis);
        return view('client.recommendations',['bmi' => $bmi],compact('usersAndBmis'));
    }
  
}

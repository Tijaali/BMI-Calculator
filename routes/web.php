<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard',[Controller::class,'dashboard'])->name('dashboard');
Route::get('/bmi-calculator',[Controller::class,'index'])->name('bmi-home');
Route::get('/recommendation/{bmi}',[CalculatorController::class,'recommend'])->name('recommendations');
Route::get('/calculator',[CalculatorController::class,'create'])->name('calculator');
Route::post('/store',[CalculatorController::class ,'store'])->name('calculator.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

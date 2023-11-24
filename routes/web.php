<?php

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
Route::prefix('orders')->group(function(){
    Route::get('/', function () {
        return view('orders');
    });    
});

Route::prefix('inventory')->group(function(){
    Route::get('/', function () {

        $name = [
            1 =>['name' => 'Napa','medtype' => 'Paracetamol','expiry' => '26-03-2023','in-stock' => '10'],
            2 =>['name' => 'Cevit','medtype' => 'Vitamin-C','expiry' => '27-08-2023','in-stock' => '66'],
            3 =>['name' => 'Rivotril','medtype' => 'Clonazepam','expiry' => '06-06-2025','in-stock' => '25'],
            4 =>['name' => 'Napa Xtra','medtype' => 'Paracetamol','expiry' => '28-03-2027','in-stock' => '5']
        ];
        return view('inventory',['list'=>$name]);
    
    });    
});

Route::prefix('analytics')->group(function(){
    Route::get('/', function () {
        return view('analytics');
    });    
});

Route::prefix('addmed')->group(function(){
    Route::get('/', function () {
        return view('addmed');
    });    
});

Route::fallback(function(){
    return view('welcome');
});


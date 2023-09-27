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

use Illuminate\Http\Request;

// Display the form
Route::get('/form', function () {
    return view('form');
});

// Handle form submission
Route::post('/submit', function (Request $request) {
    $data = $request->all();
    return view('submitted', compact('data'));
});



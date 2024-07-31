<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/login', function() {
    return view('login', [
        'title' => 'Halaman Login'
    ]);
});

Route::post('/login', function(Request $request){
    $validatedData = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required']
    ]);
});



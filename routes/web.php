<?php

use App\Mail\NewMail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/360', function () {
    return view('360');
});

Route::get('/email-no-te-rindas', function () {
    \Mail::to('me@abelponce.com')->send(new NewMail());
    return 'correo enviado :D';
});

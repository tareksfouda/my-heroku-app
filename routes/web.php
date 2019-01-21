<?php

use Illuminate\Http\Request;
use App\Mail\SendMailable;
use App\Email;
use Illuminate\Validation\Validator;
// use Illuminate\Support\Facades\Request;

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

Route::post('mail', function (Request $request) {
    $name = $request->get('name');
    $email = $request->get('email');
    $message = $request->get('message');
    
     $request->validate([
        'name' => 'required',
        'email' => 'required',
        'message' => 'required',
    ]);
    Email::create([
        'from_name' => $name,
        'from_email' => $email,
        'message' => $message,
    ]);
    return 'Email was sent';
});
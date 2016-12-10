<?php

use App\storez;
use Illuminate\Http\Request;
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
    return view('home');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/reg_submit',function(Request $request){
	$validator = Validator::make($request->all(),['password' = 'password2']);
	if($validator->fails()){
		return redirect('register')->withInput()->withErrors($validator);
	}
	$validator = Validator::make($request->all(),['pin' = 'pin2']);
	if($validator->fails()){
		return redirect('register')->withInput()->withErrors($validator);
	}
	$validator = Validator::make($request->all(),['pin' => 'required|max:6|min:6']);
	if($validator->fails()){
		return redirect('register')->withInput()->withErrors($validator);
	}
});

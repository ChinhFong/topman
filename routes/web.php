<?php
// use Auth;
use App\Http\Auth\Request;
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
//switch language
Route::post('/SwitchLan',['Middleware'=>'LanguageSwitcher','uses'=>'LanguageController@index']);
//frontend route
Route::get('/','HomeController@index');
Route::get('/vision',function(){return view('vision');});
Route::get('/mission',function(){return view('mission');});
Route::get('/profile',function(){return view('aboutus');});
Route::get('/strategy',function(){return view('strategy');});
Route::get('/services',function(){return view('services');});
Route::get('/recruitment',function(){return view('comingsoon');});
// Route::resource('/news','PostController');
Route::get('/management',function(){return view('managements');});
Route::get('/processing',function(){return view('processing');});
Route::get('/gallery',function(){return view('gallery');});
Route::get('/license',function(){return view('license');});
Route::get('/training',function(){return view('training');});
Route::get('/comingsoon',function(){return view('recruitment');});
Route::resource('/faq','FaqController');
Route::resource('/contact','SendmailController');
Route::get('/readmore','PostController@detail');
Route::get('/test',function(){return view('sharefacebook');});
//auth route
// Auth::routes();
// Route::get('/home','HomeController@index');
// Route::get('/user/verify/{token}','Auth\RegisterController@userActivation');

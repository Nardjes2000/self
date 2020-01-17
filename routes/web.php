<?php

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
})->name('home');
Route::get('/types', function () {
    return view('types');
})->name('home');
Route::get('/up', function () {
    return view('signup');
});
Route::get('/in', function () {
    return view('signin');
});

Route::get('/signup',[
  'uses'=>'usercontroller@signup',
  'as'=>'signup'
]);
//il faut s'assurer que seul le prof qui peut ajouter un etudiant
Route::get('/ajouteretudiant',[
  'middleware'=>'role',
  'as'=>'ajouteretudiant'
]);
Route::get('/dashboard',[
  'middleware'=>'auth',
  'uses'=>'usercontroller@getdashboard',
  'as'=>'dashboard',

]);
Route::get('/signin',[
  'uses'=>'usercontroller@signin',
  'as'=>'signin'
]);
Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);

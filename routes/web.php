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
Route::get('/', function(){
return  view('welcome');
});
Route::get('/login', function()
{
	// Log in the user, blah blah...
	
	Session::flash('flash_message', ' You successfully logged in to this website.');
	Session::flash('flash_type', 'alert-success');
	
    return Redirect::to('/');
});
 
Route::get('/edit', function()
{
	// User can edit their profile here...
	
	Session::flash('flash_message', 'You just made a cool edit to your profile.');
	Session::flash('flash_type', 'alert-info');
	
    return Redirect::to('/');
});
 
Route::get('/cancel', function()
{
	// User can cancel their membership here...
	
	Session::flash('flash_message', 'You are about to cancel your membership.');
	Session::flash('flash_type', 'alert-warning');
	
    return Redirect::to('/');
});
 
Route::get('/delete', function()
{
	// User can delete their account here...
	
	Session::flash('flash_message', 'Are you sure you want to delete your account?');
	Session::flash('flash_type', 'alert-danger');
	
    return Redirect::to('/');
});
 
 
// Route::get('home', function()
// {
// 	Return View::make('home');
// });
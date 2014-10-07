<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('getting-data', function()
{
	return View::make('getting-data');
});

Route::get('tab1', function()
{
	if ( Request::ajax() )
	{
		return View::make('tab1');
	}
	else
	{
		return Response::error('404');
	}
});

Route::get('tab2', function()
{
	if ( Request::ajax() )
	{
		return View::make('tab2');
	}
	else
	{
		return Response::error('404');
	}
});

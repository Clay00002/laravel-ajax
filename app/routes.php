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


//--------------------Getting data from another page
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

//----------------------End Getting data from another page

//----------------------Setting up a controller to return JSON data

Route::controller('books', 'BooksController');

//----------------------End Setting up a controller to return JSON data

//----------------------Creating an Ajax search function
Route::controller('search', 'SearchController');
//----------------------Rnd Creating an Ajax search function

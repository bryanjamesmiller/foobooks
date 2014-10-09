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

//We changed the default http path localhost to be equal to localhost/foobooks
//because we changed the xampp config settings, which
//I believe is also the httpd.conf file, under the documentRoots settings
//Now just go to http://localhost and you will arrive at the below page.
Route::get('/', function()
{
	return View::make('hello');
});

//You have to use the http path:  localhost/books
Route::get('/books', function() {
    return 'Here are all the books...';
});

//You have to use the http path:  localhost/books/whatever
Route::get('/books/{category}', function($category) {
    return 'Here are all the books in the category of '.$category;
});

//You have to use the http path:  localhost/practice
//They might ask you to "Run echo App::environment(); in your practice route to see
//how you can get Laravel to tell you what environment you're on" and that just means
// navigate to http://localhost/practice
Route::get('/practice', function() {
    echo App::environment();
});
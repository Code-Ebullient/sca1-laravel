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
});

// Route::get('/', 'AdminControllershow') ->('home');
// Route::get('about', 'AdminController@show')->name('about');
// Route::get('contact', 'AdminController@show')->name('contact');

// Basic Route
Route::get('/home', function() {
    return 'This is the home page!!!';
});

Route::get('/about', function() {
    return 'This is the about page!!!';
});

Route::get('/paid', [
    'middleware' => 'Paid',
    'uses' => 'CartController@index',
]);

// Passing additional param to the route
Route::get('/basic/{name}', function($name) {
    return "Hola $name, mucho gusto";
});

// Optional Param Routes has question mark (?)
Route::get('/optional/param/{age?}', function($sex = null) {
    return "Hi there, omiting route paramaters is allowed here. On this page you entered " . ($sex == null ? "nothing" : $sex);
});


// Routes that passed required constraints parameters

Route::get('/param/constraint/{age}', function($age) {
    echo "Integers only on this route. You entered Age: $age. It " . (preg_match("/^\d+$/",$age) ? "worked" : "did not work");
})->where('age', '[0-9]+');

Route::get('/param/constraint/{name}', function($name) {
    echo "Your name please..alphabets only on this route. You entered Name: $name. It " . (preg_match("/^([a-zA-Z']+)$/",$name) ? "worked" : "did not work");
})->where('name', '[a-z]+');

// Named routes uses name method
Route::get('/named/route', function () {
    return "This is a named route";
})->name('named-route');

Route::get('/named/route/test', (function () {
    return "<a href='" . route('named-route') ."'>This is a redirects to a route</a>";
}));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

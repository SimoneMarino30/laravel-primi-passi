<?php

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

// Home
Route::get('/', function () {
  $greeting = 'Hello World';
  return view('home', compact('greeting'));
})->name('homepage');

// Greetlist
Route::get('/greetings', function () {
  $worldGreetings = [
   'Ciao Mondo',
   'Hola Mundo',
   'こんにちは世界',
   'Bonjour le monde',
   'Hallo Welt'
  ];

  
  return view('greetings.greetList', compact('worldGreetings'));
})->name('world-greetings');


Route::get('/country-greeting/{index}', function ($index) {
  $worldGreetings = [
   'Ciao Mondo',
   'Hola Mundo',
   'こんにちは世界',
   'Bonjour le monde',
   'Hallo Welt'
  ];
  
  $worldGreeting = $worldGreetings[$index];
 

  return view('greetings.greetCountry', compact('worldGreeting'));
})->name('country-greeting');
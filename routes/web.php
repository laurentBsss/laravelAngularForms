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

Route::get('/ici', function() { return 'Je suis la page ici !'; });

// HOME PAGE ===================================  
// we dont need to use Laravel Blade 
// we will return a PHP file that will hold all of our Angular content
// see the "Where to Place Angular Files" below to see ideas on how to structure your app return  
Route::get('/', function() {   
    View::make('index'); // will return app/views/index.php 
});

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/course', fn () =>
    view('show')
);
Route::get('/courses/{course}', fn () =>
    'welcome'
);
Route::get('/courses/{course}/{title}', fn () =>
    'welcome'
);

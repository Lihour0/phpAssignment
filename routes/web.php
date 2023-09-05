<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\MyCourseController;
use App\Http\Controllers\ProfileController;
use App\Livewire\MyCourse;
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

Route::get('/', function(){ return view('index');});

Route::get('/course',[CourseController::class, 'index']);

Route::get('/course/{course}', [CourseController::class, 'show']);

Route::get('/courses/{course}', fn () =>
    'welcome'
);
Route::get('/courses/{course}/{title}', fn () =>
    'welcome'
);
Route::get('/mycourse', MyCourse::class);

Route::post('/mycourse', [CourseController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

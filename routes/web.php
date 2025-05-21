<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Models\News;
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

// Main Page
Route::get('/Main', function () {
    return view('MainPage');
});

// Heroes Page
Route::get('/Heroes', function () {
    return view('HeroesPage');
});

// News Page
Route::get('/News', [NewsController::class, 'index']);
Route::get('/News/{news}', [NewsController::class, 'show']);

// Insert News
// Route::get('/News', [NewsController::class, 'test']);

// News SubPage
// Route::prefix('/News') -> group(function () {
//     Route::get('/1', function() {
//         return view('/news page/News1');
//     });

//     Route::get('/2', function() {
//         return view('/news page/News2');
//     });

//     Route::get('/3', function() {
//         return view('/news page/News3');
//     });

//     Route::get('/4', function() {
//         return view('/news page/News4');
//     });
// });


// Esports Page
Route::get('/Esports', function () {
    return view('EsportsPage');
});

// Register Page
Route::get('/Register', [UserController::class, 'index']);
Route::post('/Register', [UserController::class, 'register']);
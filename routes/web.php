<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
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

//Controller
Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articels/{id}', [PageController::class,'articels']);

Route::get('/world', function () {
    return 'World';
});

//Basic Routing
//Route::get('/hello', function () {
    //return 'Hello World';
//});

//Route::get('/', function () {
    //return 'Selamat Datang';
//});

//Route::get('/about', function () {
    //return '2341760187';
//});

//Route Parameters
Route::get('/user/{deanissa}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke- ".$commentId;
});

Route::get('/articels/{id}', function ($Id) {
    return 'Halaman Artikel dengan ID-'.$Id ;
});

//Optional Parameters
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name ;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name ;
});

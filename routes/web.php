<?php

use App\Http\Controllers\BookmarksController;
use App\Http\Controllers\GuestbookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\RoscoLekoController;
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

Route::get('/', [HomeController::class, 'show']);
Route::get('/bookmarks', [BookmarksController::class, 'show']);
Route::get('/guestbook', [GuestbookController::class, 'show']);
Route::get('/music', [MusicController::class, 'show']);
Route::get('/pandamonium', [RoscoLekoController::class, 'show']);
Route::post('/guestbook', [GuestbookController::class, 'addEntry'])
    ->middleware('validator')
    ->middleware('rate_limit');

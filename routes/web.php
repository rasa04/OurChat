<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
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

Auth::routes();

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(ChatController::class)->group(function(){
    Route::get('/chat/{chat_id}', 'show')->name('chat.show');
    Route::post('/chat', 'store')->name('chat.store');
});

Route::controller(MessageController::class)->group(function() {
    Route::post('/chat/message', 'store')->name('chat.message.store');
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'profile')->name('profile.show');
    Route::patch('/profile', 'update')->name('profile.update');
});
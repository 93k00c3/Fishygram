<?php

use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\FishesController;

use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');
Route::get('/', 'App\Http\Controllers\FishesController@index')->name('welcome');
Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index')->name('profile.index');

Route::get('/fish/add', 'App\Http\Controllers\FishesController@add');

Route::get('/contact', ['App\Http\Controllers\ContactController', 'createForm']);
Route::post('/contact', ['App\Http\Controllers\ContactController', 'ContactUsForm'])->name('contact.store');

Route::middleware(['auth', 'verified'])->group(function(){
Route::get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard', $user);
})->middleware(['auth'])->name('dashboard');
});

require __DIR__.'/auth.php';
Route::middleware(['auth', 'verified'])->group(function() {
    Route::post('/fish/add', 'App\Http\Controllers\FishesController@store')->name('dodaj');
});
Route::get('/profile/{user}/edit', 'App\Http\Controllers\ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'App\Http\Controllers\ProfilesController@update')->name('profile.update');
Route::get('/admin/fish', [FishesController::class, 'allfish'])->name('admin.fish.list')->middleware('can:isAdmin');


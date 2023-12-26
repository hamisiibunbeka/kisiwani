<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('master.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin Routes
Route::controller(AdminController::class)->group(function () {
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/logout/page', 'logoutPage')->name('logout.page');
    Route::get('/user/profile', 'editProfile')->name('edit.profile');
    Route::post('user/profile/update', 'profileDataStore')->name('store.profile.data');

}); //End Admin Routes

//POS Routes
Route::controller(PosController::class)->group(function () {
    Route::get('pos', 'index')->name('pos');
    Route::get('pos/create', 'create')->name('pos.create');
    Route::post('pos/store', 'store')->name('pos.store');
    Route::get('pos/edit/{id}', 'edit')->name('pos.edit');
    Route::put('pos/update/{id}', 'update')->name('pos.update');
    Route::get('pos/delete/{id}', 'destroy')->name('pos.delete');

}); //End POS Routes

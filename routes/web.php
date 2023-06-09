<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});
// custom routes

Route::get('Second/Step',[dashboardController::class,'second'])->name('User.Second.Step');
Route::get('Final/Step',[dashboardController::class,'final'])->name('User.Final.Step');
Route::post('Store/Step',[dashboardController::class,'finalStore'])->name('User.Final.Store');
// admin side
Route::get('Admin/Side',[dashboardController::class,'adminSide'])->name('Admin.Dashboard')->middleware('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

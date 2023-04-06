<?php

use App\Http\Controllers\dashboardController;
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

Route::get('Admin/Side',[dashboardController::class,'adminSide'])->name('Admin.Dashboard');

Route::get('Second/Step',[dashboardController::class,'second'])->name('User.Second.Step');
Route::get('Final/Step',[dashboardController::class,'final'])->name('User.Final.Step');
Route::post('store/Step',[dashboardController::class,'finalStore'])->name('User.Final.Store');


Route::post('/User/Register',[dashboardController::class,'store'])->name('Store.User.Data');

<?php

use App\Http\Controllers\HomeController;
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

Route::get('About-Us',[HomeController::class,'aboutUsPage'])->name('Home.AboutUs');
Route::get('Contact-Us',[HomeController::class,'contactUsPage'])->name('Home.ContactUs');
Route::post('store/contact-message',[HomeController::class,'storeContactMessages']);

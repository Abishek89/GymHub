<?php

use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('frontend.index');
});

Auth::routes();

// frontend user route
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/class-details', [FrontendController::class, 'classdetails'])->name('class-details');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/bmi-calculator', [FrontendController::class, 'bmicalculator'])->name('bmi-calculator');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');

//admin route for create plan
Route::get('/createplan', [AdminController::class, 'plan'])->name('createplan');
Route::post('/createplan', [PlanController::class, 'createplan'])->name('createplan');

//admin route for add payment
Route::get('/addpayment', [AdminController::class, 'addpayment'])->name('addpayment');

//admin route for add product
Route::get('/addproduct', [AdminController::class, 'addproduct'])->name('addproduct');
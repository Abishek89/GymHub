<?php

use App\Http\Controllers\Admin\ExpensesController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TrainerController;
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


//admin route for admin dashboard
Route::get('/admindashboard', [AdminController::class, 'dashboard'])->name('admindashboard');

//admin route for create plan
Route::get('/planview/create', [PlanController::class, 'create'])->name('create');
Route::post('/planview/create', [PlanController::class, 'store'])->name('store');
Route::get('/planview', [PlanController::class, 'view'])->name('planview');
Route::get('/delete/{id}', [PlanController::class, 'delete'])->name('delete');
Route::get('/planview/edit/{id}',[PlanController::class,'edit'])->name('edit');
Route::post('/planview/update/{id}',[PlanController::class,'update'])->name('update');

//admin route for add payment
Route::get('/addpayment', [AdminController::class, 'payment'])->name('addpayment');
Route::post('/addpayment', [PaymentController::class, 'addpayment'])->name('addpayment');


//admin route for add product
Route::get('/addproduct', [AdminController::class, 'product'])->name('addproduct');
Route::post('/addproduct', [ProductController::class, 'addproduct'])->name('addproduct');

//admin route for add expenses
Route::get('/addexpenses', [AdminController::class, 'expenses'])->name('addexpenses');
Route::post('/addexpenses', [ExpensesController::class, 'addexpenses'])->name('addexpenses');

//admin route for add trainers
Route::get('/addtrainers', [AdminController::class, 'trainers'])->name('addtrainers');
Route::post('/addtrainers', [TrainerController::class, 'addtrainers'])->name('addtrainers');

//admin route for message
Route::get('/sendmessage', [AdminController::class, 'sendmessage'])->name('sendmessage');
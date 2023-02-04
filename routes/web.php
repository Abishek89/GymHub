<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Plan\PlanController;
use App\Http\Controllers\Expenses\ExpensesController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Gallery\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Payment\PaymentController as PaymentPaymentController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Trainer\TrainerController;
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
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/bmi-calculator', [FrontendController::class, 'bmicalculator'])->name('bmi-calculator');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');


//admin route for admin dashboard
Route::get('/admindashboard', [AdminController::class, 'dashboard'])->name('admindashboard');

//admin route for create plan
Route::get('/planview/createplan', [PlanController::class, 'create'])->name('createplan');
Route::post('/planview/createplan', [PlanController::class, 'store'])->name('store');
Route::get('/planview', [PlanController::class, 'view'])->name('planview');
Route::get('/delete/{id}', [PlanController::class, 'delete'])->name('delete');
Route::get('/planview/editplan/{id}',[PlanController::class,'edit'])->name('editplan');
Route::post('/planview/update/{id}',[PlanController::class,'update'])->name('update');

//admin route for add payment
Route::get('/viewpayment/create', [PaymentPaymentController::class, 'create'])->name('create');
Route::post('/viewpayment/create', [PaymentPaymentController::class, 'store'])->name('store');
Route::get('/viewpayment', [PaymentPaymentController::class, 'view'])->name('paymentview');


//admin route for add product
Route::get('/viewproduct/addproduct', [ProductController::class, 'create'])->name('addproduct');
Route::post('/viewproduct/addproduct', [ProductController::class, 'store'])->name('store');
Route::get('/viewproduct', [ProductController::class, 'view'])->name('view');


//admin route for add expenses
Route::get('/viewexpenses/addexpenses', [ExpensesController::class, 'add'])->name('addexpenses');
Route::post('/viewexpenses/addexpenses', [ExpensesController::class, 'store'])->name('store');
Route::get('/viewexpenses', [ExpensesController::class, 'view'])->name('view');

//admin route for add trainers
Route::get('/viewtrainers/addtrainers', [TrainerController::class, 'add'])->name('addtrainers');
Route::post('/viewtrainers/addtrainers', [TrainerController::class, 'store'])->name('store');
Route::get('/viewtrainers', [TrainerController::class, 'view'])->name('view');

//admin route for message
Route::get('/viewupload/uploadphoto', [GalleryController::class, 'upload'])->name('uploadphoto');
Route::post('/viewupload/uploadphoto', [GalleryController::class, 'storephoto'])->name('storephoto');
Route::get('/viewupload', [GalleryController::class, 'view'])->name('view');

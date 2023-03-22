<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\chatconroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Plan\PlanController;
use App\Http\Controllers\Expenses\ExpensesController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Gallery\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Trainer\TrainerController;
use App\Http\Controllers\Trainerdashboard\TrainerdashController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
Route::get('/aboutus', [FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/feedback', [FrontendController::class, 'feedback'])->name('feedback');
Route::get('/bmi-calculator', [FrontendController::class, 'bmicalculator'])->name('bmi-calculator');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home', [HomeController::class, 'enrolldata'])->name('add.enrollform');
Route::post('/trainer/enroll', [HomeController::class, 'enrolltrainer'])->name('trainer.enroll');
Route::get('/enrollpage', [FrontendController::class, 'enrollpage'])->name('enrollpage');
Route::get('/enrollpage/{id}', [FrontendController::class, 'payment'])->name('payment');
Route::post('/tariner/approveenroll',[TrainerController::class,'approve'])->name('approveenroll');
Route::post('/tariner/rejectenroll',[TrainerController::class,'reject'])->name('rejectenroll');






//admin route for admin dashboard
Route::get('/admindashboard', [AdminController::class, 'dashboard'])->name('admindashboard');
Route::get('/members', [AdminController::class, 'members'])->name('members');
Route::get('/enquiry', [AdminController::class, 'enquiry'])->name('enquiry');
Route::get('/activemembers', [AdminController::class, 'active'])->name('activemembers');
Route::get('/inactivemembers', [AdminController::class, 'inactive'])->name('inactivemembers');

//diet plan
Route::get('/trainer/dietplan/{id}', [TrainerController::class, 'dietplan'])->name('dietplan');
Route::Post('/user/withouttreiner', [FrontendController::class, 'withouttreiner'])->name('enroll.withouttreiner');




Route::post('/admin/approveenroll',[AdminController::class,'approve'])->name('admin.approveenroll');
Route::post('/admin/rejectenroll',[AdminController::class,'reject'])->name('admin.rejectenroll');



//admin route for create plan
Route::get('/planview/createplan', [PlanController::class, 'create'])->name('createplan');
Route::post('/planview/createplan', [PlanController::class, 'store'])->name('store');
Route::get('/planview', [PlanController::class, 'view'])->name('planview');
Route::get('/deleteplan/{id}', [PlanController::class, 'delete'])->name('deleteplan');
Route::get('/planview/editplan/{id}',[PlanController::class,'edit'])->name('editplan');
Route::post('/planview/updateplan/{id}',[PlanController::class,'update'])->name('updateplan');

//admin route for add payment
Route::get('/viewpayment/addpayment', [PaymentPaymentController::class, 'add'])->name('addpayment');
Route::post('/viewpayment/addpayment', [PaymentPaymentController::class, 'store'])->name('storepayment');
Route::get('/viewpayment', [PaymentPaymentController::class, 'view'])->name('paymentview');
Route::get('/deletepayment/{id}', [PaymentPaymentController::class, 'delete'])->name('deletepayment');
Route::get('/viewpayment/editpayment/{id}',[PaymentPaymentController::class,'edit'])->name('editpayment');
Route::post('/viewpayment/updatepayment/{id}',[PaymentPaymentController::class,'update'])->name('updatepayment');


//admin route for add product
Route::get('/viewproduct/addproduct', [ProductController::class, 'create'])->name('addproduct');
Route::post('/viewproduct/addproduct', [ProductController::class, 'store'])->name('store');
Route::get('/viewproduct', [ProductController::class, 'view'])->name('view');
Route::get('/deleteproduct/{id}', [ProductController::class, 'delete'])->name('deleteproduct');
Route::get('/viewproduct/editproduct/{id}',[ProductController::class,'edit'])->name('editproduct');
Route::post('/viewproduct/updateproduct/{id}',[ProductController::class,'update'])->name('updateproduct');


//admin route for add expenses
Route::get('/viewexpenses/addexpenses', [ExpensesController::class, 'add'])->name('addexpenses');
Route::post('/viewexpenses/addexpenses', [ExpensesController::class, 'store'])->name('store');
Route::get('/viewexpenses', [ExpensesController::class, 'view'])->name('view');
Route::get('/deleteexpenses/{id}', [ExpensesController::class, 'delete'])->name('deleteexpenses');
Route::get('/viewexpenses/editexpenses/{id}',[ExpensesController::class,'edit'])->name('editexpenses');
Route::post('/viewexpenses/updateexpenses/{id}',[ExpensesController::class,'update'])->name('updateexpenses');

//admin route for add trainers
Route::get('/viewtrainers/addtrainers', [TrainerController::class, 'add'])->name('addtrainers');
Route::post('/viewtrainers/addtrainers', [TrainerController::class, 'store'])->name('store');
Route::get('/viewtrainers', [TrainerController::class, 'view'])->name('view');
Route::get('/deletetrainer/{id}', [TrainerController::class, 'delete'])->name('deletetrainer');
Route::get('/viewtrainers/edittrainer/{id}',[TrainerController::class,'edit'])->name('edittrainer');
Route::post('/viewtrainers/updatetrainer/{id}',[TrainerController::class,'update'])->name('updatetrainer');

//admin route for message
Route::get('/viewupload/uploadphoto', [GalleryController::class, 'upload'])->name('uploadphoto');
Route::post('/viewupload/uploadphoto', [GalleryController::class, 'storephoto'])->name('storephoto');
Route::get('/viewupload', [GalleryController::class, 'view'])->name('viewupload');
Route::get('/deletephoto/{id}', [GalleryController::class, 'delete'])->name('deletephoto');




//select trainer dashboard for user
Route::get('/trainerselection/{id}', [FrontendController::class, 'trainerselect'])->name('trainerselection');
Route::get('/trainerdeatils/{planid}/{trainerid}', [FrontendController::class, 'trainer_details'])->name('trainer.details');
Route::post('trainee/enroll',[FrontendController::class,'enroll'])->name('trainee.enroll');

//trainer route 
//for trainer dashboard
Route::get('/trainer', [TrainerdashController::class, 'trainerdashboard'])->name('trainerdashboard');
Route::get('/trainer/member', [TrainerdashController::class, 'member'])->name('member');
Route::get('/trainer/active', [TrainerdashController::class, 'active'])->name('active');
Route::get('/trainer/inactive', [TrainerdashController::class, 'inactive'])->name('inactive');
Route::get('/trainer/enquiry', [TrainerdashController::class, 'enquiry'])->name('enquiry');
Route::post('/trainer/adddietplan', [TrainerdashController::class, 'adddiet'])->name('add.dietplan');






//ecommerce route
//single shop controller
Route::get('/shopsingle/{id}', [FrontendController::class, 'shopsingle'])->name('shopsingle');

//add to cart
Route::post('/addtocart', [FrontendController::class, 'addtocart'])->name('addtocart');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');


//checkout and thankyou
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::post('add/checkout',[FrontendController::class,'order'])->name('add.checkout');
Route::get('/thankyou', [FrontendController::class, 'thankyou'])->name('thankyou');




//Khalti enroll

Route::post('/khalti/payment/verify',[PaymentController::class,'verifyPayment'])->name('khalti.verifyPayment');

Route::post('/khalti/payment/store',[PaymentController::class,'storePayment'])->name('khalti.storePayment');



//chat
Route::get('/chat', [chatconroller::class, 'chat'])->name('chat');
Route::get('/user/chat',[chatconroller::class,'discussion'])->name('discussion');
Route::get('/admin/selectchat/{id}',[chatconroller::class,'selectchat'])->name('select_chat');
Route::post('/admin/storechat',[chatconroller::class,'storechat'])->name('admin.storemessage');



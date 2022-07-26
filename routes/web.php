<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\User_CartController;
use  App\Http\Controllers\WishlistController;
use  App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminBrandController;
use  App\Http\Controllers\AdminStaffsController;
use  App\Http\Controllers\AdminCommentController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CheckOutController;

use App\Http\Controllers\EditProfileController;
use App\Mail\SendMail;
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


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('/category/{slug}/{id}', [HomeController::class, 'category'])->name('category-select-list');

Route::get('brand/{slug}/{id}', [HomeController::class, 'brand'])->name('category-select-list1');

Route::get('/product-details/{id}', [HomeController::class, 'productdetails'])->name('product-details');

Route::get('/cart', [User_CartController::class, 'cart'])->name('cart');

Route::get('/staffs', [AdminStaffsController::class, 'staffs'])->name('staffs');

Route::resource('register', 'CustomerController');

Route::get('/login', [CustomerController::class, 'login'])->name('login');

Route::get('/process-login', [CustomerController::class, 'processLogin'])->name('processLogin');

Route::get('/logout_cus', [CustomerController::class, 'logout_cus'])->name('logout_cus');

Route::resource('account', 'AccountController');

Route::resource('register', 'CustomerController');

Route::get('/login', 'CustomerController@login')->name('login');


Route::get('/contactUs', [HomeController::class, 'contactUs'])->name('contactUs');

Route::put('customer_block','CustomerController@handleAccount')->name('register.handleAccount');

Route::get('profile', [CustomerController::class, 'profile'])->name('profile');

Route::get('profile/edit_profile', [CustomerController::class, 'edit_profile'])->name('edit_profile');
Route::put('profile/update_profile', [CustomerController::class, 'update_profile'])->name('update_profile');

Route::get('/historyOrder', [HomeController::class, 'historyOrder'])->name('historyOrder');
Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');

Route::get('/add-to-wishlist', [WishlistController::class, 'add'])->name('add');
Route::get('/delete-wish/{id}', [WishlistController::class, 'destroy'])->name('deleteWishList');

Route::get('/admin/comment', [AdminCommentController::class, 'adminComment'])->name('adminComment');

Route::get('/show_user', [CustomerController::class, 'show_user'])->name('show_user');

Route::put('customer_block', [CustomerController::class, 'handleAccount'])->name('handleAccount');



Route::get('/sendemail', [SendMailController::class, 'index'])->name('send_email');
Route::post('/sendemail/send', [CheckOutController::class, 'checkoutOrder']);

Route::get('/checkout', [CheckOutController::class, 'index'])->name('basket.checkout');

Route::get('/logout', [AdminLoginController::class, 'logout']);
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::prefix('admin')->group(function () {

    Route::get('/', [AdminLoginController::class, 'login']);

    Route::get('/dashBoard', function () {
        return view('admin.dashboard.index');
    });

    Route::post('/checkLogin', [AdminLoginController::class, 'checkLogin']);

    Route::prefix('staffs')->group(function () {
        Route::get('/', [AdminStaffsController::class, 'index']);

        Route::get('/createStaff', [AdminStaffsController::class, 'create']);

        Route::get('/update/{id}', [AdminStaffsController::class, 'update']);

        Route::get('/delete/{id}', [AdminStaffsController::class, 'delete']);

        Route::post('/postUpdate/{id}', [AdminStaffsController::class, 'postUpdate']);

        Route::post('/postCreate', [AdminStaffsController::class, 'postCreate']);
    });

    Route::prefix('order')->group(function () {
        Route::get('/', [AdminOrderController::class, 'index']);

        Route::get('/update/{id}', [AdminOrderController::class, 'update']);

        Route::get('/delete/{id}', [AdminOrderController::class, 'delete']);

        Route::post('/postUpdate/{id}', [AdminOrderController::class, 'postUpdate']);
    });

    Route::prefix('product')->group(function () {
        Route::get('/', [AdminProductController::class, 'index'])->name('product.index');

        Route::get('/create', [AdminProductController::class, 'create'])->name('product.create');

        Route::post('/store', [AdminProductController::class, 'store'])->name('product.store');

        Route::get('/eidt/{id}', [AdminProductController::class, 'edit'])->name('product.edit');

        Route::post('/update/{id}', [AdminProductController::class, 'update'])->name('product.update');

        Route::get('/delete/{id}', [AdminProductController::class, 'delete'])->name('product.delete');

        Route::get('/product-unactive/{id}' , [AdminProductController::class, 'unactive'])->name('product.unactive');

        Route::get('/product-active/{id}' , [AdminProductController::class, 'active'])->name('product.active');

        // Route::post('/search-product', [AdminProductController::class, 'render'])->name('product.search');

    });

    Route::prefix('brand')->group(function () {
        Route::get('/', [AdminBrandController::class, 'index'])->name('brand.index');

        Route::get('/create', [AdminBrandController::class, 'create'])->name('brand.create');

        Route::post('/store', [AdminBrandController::class, 'store'])->name('brand.store');

        Route::get('/edit/{id}', [AdminBrandController::class, 'edit'])->name('brand.edit');

        Route::post('/update/{id}', [AdminBrandController::class, 'update'])->name('brand.update');

        Route::get('/delete/{id}', [AdminBrandController::class, 'delete'])->name('brand.delete');
    });
});


Route::get('/auth/social-auth', [SocialAuthController::class, 'index'])->name('social-auth');
//GOOGLE
Route::get('/auth/google/redirect', [SocialAuthController::class, 'googleRedirect'])->name('googleRedirect');

Route::get('/auth/google/callback', [SocialAuthController::class, 'googleCallback'])->name('googleCallback');
//GITHUB
Route::get('/auth/github/redirect', [SocialAuthController::class, 'githubRedirect'])->name('githubRedirect');

Route::get('/auth/github/callback', [SocialAuthController::class, 'githubCallback'])->name('githubCallback');
//FACEBOOK
Route::get('/auth/facebook/redirect', [SocialAuthController::class, 'facebookRedirect'])->name('facebookRedirect');

Route::get('/auth/facebook/callback', [SocialAuthController::class, 'facebookCallback'])->name('facebookCallback');


Route::post('/addToCart/{id}', [User_CartController::class, 'addToCart']);
Route::get('/detele-to-cart/{id}', [User_CartController::class, 'remove']);

Route::get('/select-delivery', [CheckOutController::class, 'select_delivery']);
Route::post('/postCommentCustomer/{id}', [CommentController::class, 'PostCommentCustomer'])->name('addcomment');
Route::post('/add-rating', [CommentController::class, 'add']);
Route::post('/momo_payment', [CheckOutController::class, 'momo_payment']);
Route::get('/comment/{id}', [CommentController::class, 'comment'])->name('comment');
Route::get('/home/product-detail/PostCommentCustomer/{id}', [CommentController::class, 'comment'])->name('comment');

Route::get('/admin/comment', [AdminCommentController::class, 'adminComment'])->name('adminComment');
Route::get('/delete/{id}', [AdminCommentController::class, 'delete'])->name('comment.delete');

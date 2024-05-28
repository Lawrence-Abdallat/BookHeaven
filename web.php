<?php



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


Auth::routes(['register'=>false]);

Route::get('/', 'FrontendController@testIndex')->name('index');
Route::get('/index', 'FrontendController@indexHome')->name('indexHome');
Route::get('/lang', 'FrontendController@testIndex')->name('frontpage.lang');

Route::get('/header', 'FrontendController@header')->name('header');
Route::get('/', 'FrontendController@testIndex')->name('home');

Route::get('user/login','FrontendController@login')->name('login.form');
Route::post('user/login','FrontendController@loginSubmit')->name('login.submit');
Route::get('user/logout','FrontendController@logout')->name('user.logout');
Route::get('user/register','FrontendController@register')->name('register.form');
Route::post('user/register','FrontendController@registerSubmit')->name('register.submit');

// Reset password
Route::post('password-reset', 'FrontendController@showResetForm')->name('password.reset');

// Socialite
Route::get('login/{provider}/', 'Auth\LoginController@redirect')->name('login.redirect');
Route::get('login/{provider}/callback/', 'Auth\LoginController@Callback')->name('login.callback');


// Frontend Routes
Route::get('/home', 'FrontendController@index');
Route::get('/about-us','FrontendController@aboutUs')->name('about-us');
Route::get('/allProducts','FrontendController@allProducts')->name('allProducts');
Route::get('/terms','FrontendController@faq')->name('terms');
Route::get('/contact','FrontendController@contact')->name('contact');
Route::post('/contact/message','MessageController@store')->name('contact.store');
Route::get('product-detail/{id}','FrontendController@productDetail')->name('product-detail');
Route::get('product-detail-lang/{id}','FrontendController@productDetaillang')->name('product-detail-lang');
Route::get('category/{id}','FrontendController@category')->name('category');
Route::get('showapple','FrontendController@showapple')->name('showapple');
Route::get('brands/{id}','FrontendController@brands')->name('brands');
Route::get('subCategory/{id}','FrontendController@subCategory')->name('subCategory');
Route::post('/product/search','FrontendController@productSearch')->name('product.search');
Route::get('/product-cat/{id}','FrontendController@productCat')->name('product-cat');
Route::get('/product-sub-cat/{slug}/{sub_slug}','FrontendController@productSubCat')->name('product-sub-cat');
Route::get('/product-brand/{slug}','FrontendController@productBrand')->name('product-brand');

// Cart section
Route::get('/add-to-cart/{slug}','CartController@addToCart')->name('add-to-cart')->middleware('user');
Route::post('/add-to-cart','CartController@singleAddToCart')->name('single-add-to-cart');
Route::get('cart-delete/{id}','CartController@cartDelete')->name('cart-delete');
Route::post('cart-update','CartController@cartUpdate')->name('cart.update');
Route::get('/cart','CartController@cart')->name('cart');
Route::middleware('auth')->group(function () {
    Route::get('/checkout','CartController@checkout')->name('checkout');
});



Route::get('/wishlist','WishlistController@wishlistShow')->name('wishlist');
Route::get('/wishlist/{slug}','WishlistController@wishlist')->name('add-to-wishlist')->middleware('user');
Route::get('wishlist-delete/{id}','WishlistController@wishlistDelete')->name('wishlist-delete');
Route::post('cart/order','OrderController@store')->name('cart.order');
Route::get('order/pdf/{id}','OrderController@pdf')->name('order.pdf');
Route::get('/income','OrderController@incomeChart')->name('product.order.income');



// Blog
Route::get('/blog','FrontendController@blog')->name('blog');
Route::get('/blog-detail/{slug}','FrontendController@blogDetail')->name('blog.detail');

//testimonials
Route::get('/testimonials','FrontendController@testimonials')->name('testimonials');

// Payment
Route::get('payment', 'PaypalController@postPaymentWithpaypal')->name('payment');
// Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
// Route::get('payment/success', 'PayPalController@success')->name('payment.success');
// Route::get('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));


Route::get('/clear_cache','LiveCmdController@clear_cache')->name('clear_cache');
Route::get('/view_clear','LiveCmdController@view_clear')->name('view_clear');
Route::get('/optimize','LiveCmdController@optimize')->name('optimize');
Route::get('/storage_link','LiveCmdController@storage_link')->name('storage_link');

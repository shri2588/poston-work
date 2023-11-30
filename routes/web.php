<?php

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
    return view('auth.login');

    // return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('dashboard','Admin\DashboardController@dashboard')->name('dashboard');
});





//affiliate_system
Route::get('affiliate_login','Affiliate\AffiliateController@affiliate_login')->name('affiliate_login');
Route::POST('affiliate_login_auth','Affiliate\AffiliateController@affiliate_login_auth')->name('affiliate_login_auth');

Route::middleware('is_affiliate')->group(function ()
{
    Route::get('affiliate_system','Affiliate\AffiliateController@dashboard')->name('affiliate_system');
    Route::get('affiliate_logout','Affiliate\AffiliateController@affiliate_logout')->name('affiliate_logout');

    //custome Routes
    

    // Route::get('affiliate_logout','Affiliate\AffiliateController@affiliate_logout')->name('affiliate_logout');

    Route::resource('withdrawalmethod','Affiliate\WithDrawalMethodController');
});

Route::get('/account',function(){
    return view('accounts');
});

Route::get('/social',function(){
    return view('socialMedia');
});

Route::get('/email',function(){
    return view('email');
});

Route::get('/sms',function(){
    return view('sms');
});

Route::get('/openai',function(){
    return view('openAI');
});

Route::get('/json',function(){
    return view('json');
});

Route::get('/woocommerce',function(){
    return view('woocommerce');
});


require __DIR__.'/auth.php';

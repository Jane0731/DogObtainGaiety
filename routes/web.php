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
//首頁
Route::get('/', function () {
    return view('front.index');
});
//聯絡資訊
Route::get("information", 'App\Http\Controllers\InformationController@index');
Route::post("information", 'App\Http\Controllers\InformationController@option');

//浪浪科普
Route::get('popular_science', function () {
    return view('front.popular_science');
});
//浪浪愛心
Route::get('charity', function () {
    return view('front.charity');
});

//小測驗
Route::get("test", 'App\Http\Controllers\TestController@start');

//Google登入
Route::get('google/auth', 'App\Http\Controllers\SocialiteController@redirectToProvider');
Route::get('google/auth/callback', 'App\Http\Controllers\SocialiteController@handleProviderCallback');



//登入
Route::get("login", 'App\Http\Controllers\AdminController@showlogin')->name('login');
Route::post("login", 'App\Http\Controllers\AdminController@login');

//忘記密碼(尚未完成)
Route::get("forget", 'App\Http\Controllers\ForgotPasswordController@showforgotpassword');
Route::post("forget", 'App\Http\Controllers\ForgotPasswordController@forgotpassword');


//登出
Route::get("logout", 'App\Http\Controllers\AdminController@logout');

//註冊
Route::get("regist", 'App\Http\Controllers\SignUpController@showregist');
Route::post("regist", 'App\Http\Controllers\SignUpController@regist');


//流浪狗
Route::get("dog/{dog_id}", 'App\Http\Controllers\DogController@show');
Route::post("dog/{dog_id}", 'App\Http\Controllers\DogController@getAddToCart');
Route::get("dog", 'App\Http\Controllers\DogController@index');
Route::get('dog/{dog_id}/add-to-cart_r', 'App\Http\Controllers\DogController@getAddToCart_r');

//物資
Route::get("donate/{donate_id}", 'App\Http\Controllers\DonateController@show');
Route::get("donate", 'App\Http\Controllers\DonateController@index');
Route::post("donate/{donate_id}/donate_supplies", 'App\Http\Controllers\DonateController@getAddToCart');
Route::post("donate/{donate_id}/send_supplies", 'App\Http\Controllers\DonateController@send_supplies');

//浪浪愛心
Route::get("financial_statements", 'App\Http\Controllers\FinancialStatementsController@index');


//購物車
Route::get('cart', 'App\Http\Controllers\CartController@cart')->middleware('auth');
Route::post('cart', 'App\Http\Controllers\OrdersController@new')->middleware('auth');
Route::get('clear-cart', 'App\Http\Controllers\CartController@clearCart')->middleware('auth');
Route::get('increase-one-item/{id}', 'App\Http\Controllers\CartController@increaseByOne')->middleware('auth');
Route::get('decrease-one-item/{id}', 'App\Http\Controllers\CartController@decreaseByOne')->middleware('auth');
Route::get('remove-item/{id}', 'App\Http\Controllers\CartController@removeItem')->middleware('auth');
Route::get('increase-one-item_donate/{id}', 'App\Http\Controllers\CartController@increaseByOne_donate')->middleware('auth');
Route::get('decrease-one-item_donate/{id}', 'App\Http\Controllers\CartController@decreaseByOne_donate')->middleware('auth');
Route::get('remove-item_donate/{id}', 'App\Http\Controllers\CartController@removeItem_donate')->middleware('auth');


//訂單
Route::post('orders', 'App\Http\Controllers\OrdersController@store');
Route::post('callback', 'App\Http\Controllers\OrdersController@callback');
Route::get('success', 'App\Http\Controllers\OrdersController@redirectFromECpay');



//會員專區
Route::get('member', function () {
    return view('front.member');
})->middleware('auth');

//會員設定
Route::get('member/member_setting', 'App\Http\Controllers\MemberSettingController@index')->middleware('auth');
Route::post('member/member_setting/editname', 'App\Http\Controllers\AdminController@editname');
Route::post('member/member_setting/edittel', 'App\Http\Controllers\AdminController@edittel');
Route::post('member/member_setting/editpwd', 'App\Http\Controllers\AdminController@editpwd');



//助養紀錄
Route::get("member/sponsor_record", 'App\Http\Controllers\DogSponsorRecordController@index')->middleware('auth');

//捐款紀錄
Route::get("member/donate_record", 'App\Http\Controllers\DonateItemRecordController@index')->middleware('auth');

//狗狗日常紀錄

Route::get("member/dog_daily_record_list", 'App\Http\Controllers\DogDailyController@index')->middleware('auth');

Route::get("member/dog_daily_record_list/{dog_id}", 'App\Http\Controllers\DogDailyController@show')->middleware('auth');







//後台
Route::redirect('/back', '/back/bk_user')-> middleware('can:admin');

Route::get("back/bk_user", 'App\Http\Controllers\BKUserController@index')-> middleware('can:admin');;

Route::get("back/bk_dog", 'App\Http\Controllers\BKDogController@index')-> middleware('can:admin');;

Route::get("back/bk_donate", 'App\Http\Controllers\BKDonateController@index')-> middleware('can:admin');;

Route::get('back/bk_order', 'App\Http\Controllers\OrdersController@index')-> middleware('can:admin');;

Route::get("back/bk_dailyRecord", 'App\Http\Controllers\BKDailyRecordController@index')-> middleware('can:admin');;

Route::get("back/bk_test", 'App\Http\Controllers\BKTestController@index')-> middleware('can:admin');;

Route::get("back/bk_sendItem", 'App\Http\Controllers\BKSendItemController@index')-> middleware('can:admin');;

Route::get("back/bk_contact", 'App\Http\Controllers\BKContactController@index')-> middleware('can:admin');;

//新增資料(後台)
Route::post("back/bk_dog", 'App\Http\Controllers\BKDogController@store')-> middleware('can:admin');;

Route::post("back/bk_donate", 'App\Http\Controllers\BKDonateController@store')-> middleware('can:admin');;

Route::post("back/bk_dailyRecord", 'App\Http\Controllers\BKDailyRecordController@store')-> middleware('can:admin');;

Route::post("back/bk_test", 'App\Http\Controllers\BKTestController@store')-> middleware('can:admin');;


//新增modals(後台)
Route::get("/modals/addDog", 'App\Http\Controllers\BKDogController@create')-> middleware('can:admin');;
Route::get("/modals/addDonate", 'App\Http\Controllers\BKDonateController@create')-> middleware('can:admin');;
Route::get("/modals/addDaily", 'App\Http\Controllers\BKDailyRecordController@create')-> middleware('can:admin');;
Route::get("/modals/addTest", 'App\Http\Controllers\BKTestController@create')-> middleware('can:admin');;

//編輯(後台)
Route::get("/modals/bk_dog/{id}", 'App\Http\Controllers\BKDogController@edit')-> middleware('can:admin');;
Route::get("/modals/bk_donate/{id}", 'App\Http\Controllers\BKDonateController@edit')-> middleware('can:admin');;
Route::get("/modals/bk_dailyRecord/{id}", 'App\Http\Controllers\BKDailyRecordController@edit')-> middleware('can:admin');;
Route::get("/modals/bk_test/{id}", 'App\Http\Controllers\BKTestController@edit')-> middleware('can:admin');;

//更新(後台)
Route::patch("back/bk_dog/{id}", 'App\Http\Controllers\BKDogController@update')-> middleware('can:admin');;
Route::patch("back/bk_donate/{id}", 'App\Http\Controllers\BKDonateController@update')-> middleware('can:admin');;
Route::patch("back/bk_dailyRecord/{id}", 'App\Http\Controllers\BKDailyRecordController@update')-> middleware('can:admin');;
Route::patch("back/bk_test/{id}", 'App\Http\Controllers\BKTestController@update')-> middleware('can:admin');;
Route::patch("back/bk_sendItem/{id}", 'App\Http\Controllers\BKSendItemController@update')-> middleware('can:admin');;
Route::patch("back/bk_contact/{id}", 'App\Http\Controllers\BKContactController@update')-> middleware('can:admin');;

//刪除(後台)
Route::delete("back/bk_dog/{id}", 'App\Http\Controllers\BKDogController@destroy')-> middleware('can:admin');;
Route::delete("back/bk_donate/{id}", 'App\Http\Controllers\BKDonateController@destroy')-> middleware('can:admin');;
Route::delete("back/bk_dailyRecord/{id}", 'App\Http\Controllers\BKDailyRecordController@destroy')-> middleware('can:admin');;
Route::delete("back/bk_test/{id}", 'App\Http\Controllers\BKTestController@destroy')-> middleware('can:admin');;

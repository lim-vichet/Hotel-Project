<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MainController;

/*restaurants
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[HomeController::class,'Index'])->name('index');
Route::get('/header',[HomeController::class,'Header']);
Route::get('/room',[HomeController::class,'Room'])->name('room');
Route::get('/restaurant',[HomeController::class,'Restaurant'])->name('restaurant');
Route::get('/contact',[HomeController::class,'Contact'])->name('contact');
Route::get('/about',[HomeController::class,'About'])->name('about');
Route::get('/det-restaurant1/',[HomeController::class, 'Det_Restaurant1'])->name('det-restaurant1');
Route::get('/det-room1',[HomeController::class,'Det_Room1'])->name('det-room1');
Route::get('test',[HomeController::class,'Test'])->name('test');

//DataController
//menu
Route::get('data',[DataController::class,'Data'])->name('data');
Route::get('menu_form',[DataController::class,'Menu_Form'])->name('menu_form');
Route::post('menu_insert',[DataController::class,'Menu_insert'])->name('menu_insert');
Route::get('menu_delete/{id}',[DataController::class,'Menu_delete'])->name('menu_delete');
Route::get('menu_update/{id}',[DataController::class,'Menu_update'])->name('menu_update');
Route::put('menu_edit/{id}',[DataController::class,'Menu_edit'])->name('menu_edit');
Route::get('menu',[DataController::class,'Menu'])->name('menu');
//logo
Route::get('logo',[DataController::class,'Logo'])->name('logo');
Route::get('logo_form',[DataController::class,'Logo_Form'])->name('logo_form');
Route::post('logo_insert',[DataController::class,'Logo_Insert'])->name('logo_insert');
Route::get('logo_delete/{id}',[DataController::class,'Logo_Delete'])->name('logo_delete');
Route::get('logo_update/{id}',[DataController::class,'Logo_Update'])->name('logo_update');
Route::put('logo_edit/{id}',[DataController::class,'Logo_Edit'])->name('logo_edit');
Route::get('logo_show',[DataController::class,'Logo_Show'])->name('logo_show');
//ads
Route::get('ads',[DataController::class,'Ads'])->name('ads');
Route::get('ads_form',[DataController::class,'Ads_Form'])->name('ads_form');
Route::post('ads_insert',[DataController::class,'Ads_Insert'])->name('ads_insert');
Route::get('ads_delete/{id}',[DataController::class,'Ads_Delete'])->name('ads_delete');
Route::get('ads_update/{id}',[DataController::class,'Ads_Update'])->name('ads_update');
Route::put('ads_edit/{id}',[DataController::class,'Ads_Edit'])->name('ads_edit');
//slide
Route::get('slide',[DataController::class,'Slide'])->name('slide');
Route::get('slide_form',[DataController::class,'Slide_Form'])->name('slide_form');
Route::post('slide_insert',[DataController::class,'Slide_Insert'])->name('slide_insert');
Route::get('slide_delete/{id}',[DataController::class,'Slide_Delete'])->name('slide_delete');
Route::get('slide_update/{id}',[DataController::class,'Slide_Update'])->name('slide_update');
Route::put('slide_edit/{id}',[DataController::class,'Slide_Edit'])->name('slide_edit');
//Room
Route::get('rooms',[DataController::class,'Rooms'])->name('rooms');
Route::get('room_form',[DataController::class,'Room_Form'])->name('room_form');
Route::post('room_insert',[DataController::class,'Room_Insert'])->name('room_insert');
Route::get('room_delete/{id}',[DataController::class,'Room_Delete'])->name('room_delete');
Route::get('room_update/{id}',[DataController::class,'Room_Update'])->name('room_update');
Route::put('room_edit/{id}',[DataController::class,'Room_Edit'])->name('room_edit');
Route::get('room_detail/{id}',[HomeController::class,'Det_Room1'])->name('room_detail');
//photo
Route::post('upload_photo',[DataController::class,'Upload_Photo'])->name('upload_photo');
//Restaurant
Route::get('restaurants',[DataController::class,'Restaurants'])->name('restaurants');
Route::get('restaurant_form',[DataController::class,'Restaurant_Form'])->name('restaurant_form');
Route::post('restaurant_insert',[DataController::class,'Restaurant_Insert'])->name('restaurant_insert');
Route::get('restaurant_delete/{id}',[DataController::class,'Restaurant_Delete'])->name('restaurant_delete');
Route::get('restaurant_update/{id}',[DataController::class,'Restaurant_Update'])->name('restaurant_update');
Route::put('restaurant_edit/{id}',[DataController::class,'Restaurant_Edit'])->name('restaurant_edit');
Route::get('restaurant_detail/{id}',[DataController::class,'Restaurant_Detail'])->name('restaurant_detail');
//Contact Us
Route::get('contacts',[DataController::class,'Contact'])->name('contacts');
Route::get('contact_form',[DataController::class,'Contact_Form'])->name('contact_form');
Route::post('contact_insert',[DataController::class,'Contact_Insert'])->name('contact_insert');
Route::get('contact_delete/{id}',[DataController::class,'Contact_Delete'])->name('contact_delete');
Route::get('contact_update/{id}',[DataController::class,'Contact_Update'])->name('contact_update');
Route::put('contact_edit/{id}',[DataController::class,'Contact_Edit'])->name('contact_edit');

//About Us
Route::get('abouts',[DataController::class,'Abouts'])->name('abouts');
Route::get('about_form',[DataController::class,'About_Form'])->name('about_form');
Route::post('about_insert',[DataController::class,'About_Insert'])->name('about_insert');
Route::get('about_delete/{id}',[DataController::class,'About_Delete'])->name('about_delete');
Route::get('about_update/{id}',[DataController::class,'About_Update'])->name('about_update');
Route::put('about_edit/{id}',[DataController::class,'About_Edit'])->name('about_edit');
//MainController
    //login
Route::get('login',[MainController::class,'Login'])->name('login');
Route::post('check_login',[MainController::class,'CheckLogin'])->name('check_login');
Route::get('success_login',[MainController::class,'SuccessLogin'])->name('success_login');
Route::get('logout',[MainController::class,'Logout'])->name('logout');
    //User
Route::get('user',[MainController::class,'User'])->name('user');
Route::get('user_form',[MainController::class,'User_Form'])->name('user_form');
Route::post('user_insert',[MainController::class,'User_Insert'])->name('user_insert');
Route::get('user_delete/{id}',[MainController::class,'User_Delete'])->name('user_delete');
Route::get('user_update/{id}',[MainController::class,'User_Update'])->name('user_update');
Route::put('user_edit/{id}',[MainController::class,'User_Edit'])->name('user_edit');

//

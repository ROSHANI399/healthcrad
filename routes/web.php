<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/header', function () {
    return view('header');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/index', function () {
    return view('index');
});


// Route::get('/login',[loginController::class,'create']);

Route::post('/login',[loginController::class,'store']);
Route::get('/login',[loginController::class,'login']);
Route::post('/login',[loginController::class,'logcode']);

Route::get('/register',[AddUserController::class,'register']);
Route::post('/register',[AddUserController::class,'store']);
Route::post('/regcode',[AddUserController::class,'regcode']);
Route::get('/regcode',[AddUserController::class,'regcode']);
Route::get('/table',[AddUserController::class,'table']);
Route::get('/table/update/{id}/{status}',[AddUserController::class,'updateStatus']);
//Route::get('/table/update/{id}',[AddUserController::class,'InactiveStatus']);
Route::get('/table/delete/{id}',[AddUserController::class,'destroy']);


Route::get('/advertis_list',[AddUserController::class,'advertis_list']);
Route::get('/offerslider',[AddUserController::class,'offerslider']);

//////////////////////////users///////////////////////////

Route::get('/user-list',[AddUserController::class,'userlist']);
Route::get('/user-enquiry',[AddUserController::class,'userenquiry']);
Route::get('/user-privacy',[AddUserController::class,'usereprivacy']);

/////doctor/////////////

Route::get('/doctor-add',[AddUserController::class,'adddoctor']);
Route::get('/doctor-list',[AddUserController::class,'listdoctor']);
Route::get('/contact',[AddUserController::class,'contact']);
Route::get('/doctor-enquiry',[AddUserController::class,'enquiry']);
Route::get('/appointment',[AddUserController::class,'appointment']);
Route::get('/check_patient',[AddUserController::class,'check_patient']);
Route::get('/time_slot',[AddUserController::class,'time_slot']);
Route::get('/bank_detail',[AddUserController::class,'bankdatail']);
Route::get('/doctor_history',[AddUserController::class,'histroy']);


////////////////////pharmacies//////////////////////////

Route::get('/pharmalist',[AddUserController::class,'pharmalist']);
Route::get('/pharmaenquiry',[AddUserController::class,'pharmaenquiry']);
Route::get('/pharmabank_detail',[AddUserController::class,'pharmabank_detail']);



/////////////////////agency////////////////////////

Route::get('/agencylist',[AddUserController::class,'agencylist']);
Route::get('/agencyenquiry',[AddUserController::class,'agencyenquiry']);
Route::get('/agencybank_detail',[AddUserController::class,'agencybank_detail']);
Route::get('/agencyBook_detail',[AddUserController::class,'agencyBook_detail']);
Route::get('/agency_history',[AddUserController::class,'agency_history']);


/////////////////////Medicien////////////////////////////

Route::get('/medicien_list',[AddUserController::class,'medicien_list']);
Route::get('/medicienbank_detail',[AddUserController::class,'medicienbank_detail']);


//////////////////////////////Zone//////////////////////////////////

Route::get('/zone_list',[AddUserController::class,'zone_list']);


/////////////////////Category/////////////

Route::get('/category_list',[AddUserController::class,'category_list']);


//Order//

Route::get('/order_list',[AddUserController::class,'order_list']);
Route::get('/order_history',[AddUserController::class,'order_history']);

Route::get('/Path _Lab',[AddUserController::class,'Path_Lab']);
Route::get('/Emergency',[AddUserController::class,'Emergency']);
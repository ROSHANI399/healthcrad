<?php
use App\Http\Controllers\Api\AdvertiseController;
use App\Http\Controllers\Api\RegisterController;
use App\http\Controllers\Api\DoctorlistController;
use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('register',[RegisterController::class,'register']);
Route::post('login',[LoginController::class,'login']);
Route::post('profile',[RegisterController::class,'profile']);
Route::post('profile/update',[RegisterController::class,'updateprofile']);

///////Advertise////////////

Route::post('advertise',[AdvertiseController::class,'advertise']);

Route::post('doctorregister',[DoctorlistController::class,'doctorregister']);

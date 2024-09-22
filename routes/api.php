<?php
use App\Http\Controllers\Api\AdvertiseController;
use App\Http\Controllers\Api\RegisterController;
use App\http\Controllers\Api\DoctorlistController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\MedicineController;
use App\Http\Controllers\Api\Register_Controller;
use App\Http\Controllers\Api\LoginApiController;
use App\Http\Controllers\Api\UserProfileController;
use App\Http\Controllers\Api\SliderController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\form;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('register',[RegisterController::class,'register']);
Route::post('login',[LoginController::class,'login']);
Route::post('profile',[RegisterController::class,'profile']);
Route::post('profile/update',[RegisterController::class,'updateprofile']);

///////Advertise////////////
Route::post('advertise',[AdvertiseController::class,'advertise']);

/////doctor register/////
Route::post('doctorregister',[DoctorlistController::class,'doctorregister']);

///medicine///////
Route::post('medicine/{id}',[MedicineController::class,'medicine']);

////register////
Route::post('Register',[Register_Controller::class,'Register']);

///update profile///
Route::put('registerprofile/{id}', [Register_Controller::class, 'profile']);

////login////
Route::post('Login',[LoginApiController::class,'Login']);

///User Profile///
Route::post('department',[UserProfileController::class,'department']);
Route::post('userprofile/{id}',[UserProfileController::class,'userprofile']);


////////////slider////////////
Route::post('slider',[SliderController::class,'slider']);

///////////Ambulance booking//////////////


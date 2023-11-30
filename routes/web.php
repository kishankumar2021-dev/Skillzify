<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\template\HomeController;
use App\Http\Controllers\template\AboutController;
use App\Http\Controllers\template\CourseConroller;
use App\Http\Controllers\template\ContactController;
use App\Http\Controllers\template\InstructorController;
use App\Http\Controllers\template\BlogController;
use App\Http\Controllers\template\LoginController;
use App\Http\Controllers\template\RegistartionController;
use App\Http\Controllers\template\GoogleController;
use App\Http\Controllers\template\FacebookController;

use App\Http\Middleware;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/*
|----------------------------------
|template routes
|----------------------------------
*/

Route::get('/',[HomeController::class,'index'])->name('Home');
Route::get('/about',[AboutController::class,'index']);
//Route::get('/course',[CourseConroller::class,'index']);
//Route::get('/instructor',[InstructorController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);

Route::get('/Registerlogin',[LoginController::class,'index']);

//-------------------login and register here---------------

Route::post('/login',[LoginController::class,'login']);
Route::post('/register',[RegistartionController::class,'register'])->name('register');

//-------------------check Authentication Hare -----------------

Route::get('/course',[CourseConroller::class,'index'])->middleware('verifiedUser');
Route::get('/instructor',[InstructorController::class,'index'])->middleware('verifiedUser');

//-------------------  Google login ------------------------
Route::get('/auth/google', [GoogleController::class, 'loginWithGoogle'])->name('login');

Route::any('/auth/google/callback',[GoogleController::class,'CallbackformGoogle'])->name('callback');
Route::get('/UserLoginDashbosrd', function(){
        return 'You are logined!!';
})->name('home');

//------------------- facebook login ------------------------
Route::get('/auth/facebook',[FacebookController::class, 'loginWithFacebook'])->name('facebooklogin');
Route::any('/auth/facebook/callback',[FacebookController::class, 'CallbackformFacebook'])->name('facebookloginCallback');

Route::get('/facebookdashborad', function(){
    return 'You are logined!!';
})->name('facebookhome');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

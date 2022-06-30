<?php
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Models\Car;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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


////general
Route::get('/', function(){
       
    $cars = Car::all();
    return view('home',['cars'=>$cars]);
})->name('home');

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});



///Users



////Cars
Route::get('/cars',[CarController::class, 'index']);
Route::get('/cars/create',[CarController::class, 'create'])->Middleware('auth');
Route::post('/cars',[CarController::class, 'store'])->Middleware('auth');
Route::get('/cars/search',[CarController::class, 'search']);
Route::get('/cars/manage',[CarController::class, 'manage'])->Middleware('auth');
Route::get('/cars/{id}',[CarController::class, 'show']);
Route::get('/cars/edit/{car}',[CarController::class, 'edit'])->Middleware('auth');
Route::put('/cars/{car}',[CarController::class, 'update'])->Middleware('auth');
Route::delete('/cars/{car}',[CarController::class, 'destroy'])->Middleware('auth');


// new laravel 9 grouping routes
// Route::controller(CarController::class)->group(function(){
//     Route::get('/cars','index');
//     Route::post('/cars','store')->Middleware('auth');
// });

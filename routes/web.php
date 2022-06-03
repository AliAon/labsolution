<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\auth;
use App\Http\Controllers\user;
use App\Http\Controllers\doctors;

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

Route::get('/', function () {
    return view('index');
});
 
Route::controller(user::class)->group(function () {
    Route::post('/login','login_user')->name('login');
    Route::get('/logout_user','logout_user');
    Route::post('/user/samplerecipent','sample_recipeint')->name('/user/samplerecipent');
    Route::post('/user/expence','search_expence')->name('/user/expence');
    Route::post('/user/test', 'search_test')->name('/user/test');
    Route::post('/user/searchdeus', 'search_patient')->name('/user/searchdeus');
    Route::post('/user/doctors', 'search_doctor')->name('/user/doctors');

});




Route::get('/user', function () {
    return view('users.UserDashboard');
})->middleware('auth');

Route::get('/user/samplerecipent', function () {
    return view('users.SampleRecipent');
})->middleware('auth');


Route::get('/user/viewreport', function () {
    return view('users.ViewReport');
})->middleware('auth');
Route::get('/user/expence', function () {
    return view('users.Expence');
})->middleware('auth');
Route::get('/user/statement', function () {
    return view('users.Statements');
})->middleware('auth');
Route::get('/user/test', function () {
    return view('users.Tests');
})->middleware('auth');
Route::get('/user/searchdeus', function () {
    return view('users.SearchDeues');
})->middleware('auth');

Route::get('/user/doctors', function () {
    return view('users.Doctors');
})->middleware('auth');


//admin
Route::get('/user/admin', function () {
    return view('admin.AdminDashboard');
});
Route::get('/user/admin/samplerecipent', function () {
    return view('admin.SampleRecipent');
});
Route::get('/user/admin/viewreport', function () {
    return view('admin.ViewReport');
});
Route::get('/user/admin/expence', function () {
    return view('admin.Expence');
});
Route::get('/user/admin/statement', function () {
    return view('admin.Statements');
});
Route::get('/user/admin/test', function () {
    return view('admin.Tests');
});
Route::get('/user/admin/searchdeus', function () {
    return view('admin.SearchDeues');
});
Route::get('/user/admin/doctors', function () {
    return view('admin.Doctors');
});
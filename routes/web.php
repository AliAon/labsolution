<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/user', function () {
    return view('users.UserDashboard');
});
Route::get('/user/samplerecipent', function () {
    return view('users.SampleRecipent');
});
Route::get('/user/viewreport', function () {
    return view('users.ViewReport');
});
Route::get('/user/expence', function () {
    return view('users.Expence');
});
Route::get('/user/statement', function () {
    return view('users.Statements');
});
Route::get('/user/test', function () {
    return view('users.Tests');
});
Route::get('/user/searchdeus', function () {
    return view('users.SearchDeues');
});
Route::get('/user/doctors', function () {
    return view('users.Doctors');
});
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
<?php

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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/userhom', function () {
    return view('userhom');
});
Route::get('/secpag', function () {
    return view('secpag');
});
Route::get('/viwcat', function () {
    return view('viwcat');
});
Route::get('/logad', function () {
    return view('logad');
});
Route::get('/regester', function () {
    return view('regester');
});
Route::get('/deletcat', function () {
    return view('deletcat');
});
Route::get('/deletprod', function () {
    return view('deletprod');
});
Route::get('/updatcat', function () {
    return view('updatcat');
});
Route::get('/addcat', function () {
    return view('addcat');
});
Route::get('/addprod', function () {
    return view('addprod');
});
Route::get('/updatprod', function () {
    return view('updatprod');
});
Route::get('/admainpag', function () {
    return view('admainpag');
});
Route::get('/admaincat', function () {
    return view('admaincat');
});
Route::get('/adminhome', function () {
    return view('adminhome');
});









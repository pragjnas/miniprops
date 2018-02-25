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
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/signin', function () {
    return view('pages.signin');
});
Route::get('/signup', function () {
    return view('pages.signup');
});
Route::get('/bootstrapcard', function () {
    return view('pages.bootstrapcard');
});
Route::get('/bootstrapcard1', function () {
    return view('pages.bootstrapcard1');
});
Route::get('/bootstrapcard2', function () {
    return view('pages.bootstrapcard2');
});
Route::get('/logout', function () {
    return view('pages.logout');
});
Route::get('/viewmsgs', function () {
    return view('pages.viewmsgs');
});
Route::post('/contact', function () {
    $data = request()->all();

    echo "Email: ", $data['email'],'<br>';
    echo "Subject: ", $data['text'],'<br>';
    echo "Message: ", $data['body'];
});
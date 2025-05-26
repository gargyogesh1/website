<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/sector', function () {
    return view('sector');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/career', function () {
    return view('career');
});
Route::post('/send_email.php', function () {
    return view('send_email');
});


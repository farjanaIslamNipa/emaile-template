<?php

use App\Models\Post;
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

    return view('posts', [
        'posts' => Post::all()
    ]);
});
Route::get('/order', function () {
    return view('emailTemplate.order-email-template');
});
Route::get('/new-appointment', function () {
    return view('emailTemplate.new-appointment-template');
});
Route::get('/payment', function () {
    return view('emailTemplate.payment-email-template');
});
Route::get('/invoice-request', function () {
    return view('emailTemplate.invoice-request-template');
});
Route::get('/feedback', function () {
    return view('emailTemplate.feedback-email-template');
});


Route::get('/posts/{post}', function ($slug) {

    return view('post', [
        'post' =>  Post::findOrFail($slug)
    ]);


});

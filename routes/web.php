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

Route::get('/', [\App\Http\Controllers\GoogleOAuthController::class, 'index'])->name('oauth.login');
Route::get('/oauth_callback', [\App\Http\Controllers\GoogleOAuthController::class, 'OAuthCallback'])->name('oauth.callback');

Route::middleware('oauth')->group(function (){

});
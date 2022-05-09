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

Route::view('/', 'front.home')->name('home');
Route::view('about', 'front.about')->name('about');
Route::view('app-development-portfolio', 'front.app-development-portfolio')->name('app-development-portfolio');
Route::view('brand-creative-portfolio', 'front.brand-creative-portfolio')->name('brand-creative-portfolio');
Route::view('creative-services', 'front.creative-services')->name('creative-services');
Route::view('developmentsolutions', 'front.developmentsolutions')->name('developmentsolutions');
Route::view('digital-marketing-portfolio', 'front.digital-marketing-portfolio')->name('digital-marketing-portfolio');
Route::view('digital-marketing', 'front.digital-marketing')->name('digital-marketing');
Route::view('digital', 'front.digital')->name('digital');
Route::view('enterprisesolutions', 'front.enterprisesolutions')->name('enterprisesolutions');
Route::view('portfolio-main', 'front.portfolio-main')->name('portfolio-main');
Route::view('portfolios', 'front.portfolios')->name('portfolios');
Route::view('privacy-policy', 'front.privacy-policy')->name('privacy-policy');
Route::view('refund-policy', 'front.refund-policy')->name('refund-policy');
Route::view('thankyou', 'front.thankyou')->name('thankyou');
Route::view('web-development-portfolio', 'front.web-development-portfolio')->name('web-development-portfolio');
Route::view('thankyou', 'front.thankyou')->name('thankyou');

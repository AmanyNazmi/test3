<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/' ,[TestController::class , 'index'])->name('index');
Route::get('/index_1' ,[TestController::class , 'index_1'])->name('index_1');
Route::get('/about' ,[TestController::class , 'about'])->name('about');
Route::get('/team' ,[TestController::class , 'team'])->name('team');
Route::get('/testimonials' ,[TestController::class , 'testimonials'])->name('testimonials');
Route::get('/faq' ,[TestController::class , 'faq'])->name('faq');
Route::get('/pricing' ,[TestController::class , 'pricing'])->name('pricing');
Route::get('/projects' ,[TestController::class , 'projects'])->name('projects');
Route::get('/projects_single' ,[TestController::class , 'projects_single'])->name('projects_single');
Route::get('/services' ,[TestController::class , 'services'])->name('services');
Route::get('/service_single' ,[TestController::class , 'service_single'])->name('service_single');
Route::get('/typography' ,[TestController::class , 'typography'])->name('typography');
Route::get('/A404' ,[TestController::class , 'A404'])->name('A404');
Route::get('/news_left_sidebar' ,[TestController::class , 'news_left_sidebar'])->name('news_left_sidebar');
Route::get('/news_right_sidebar' ,[TestController::class , 'news_right_sidebar'])->name('news_right_sidebar');
Route::get('/news_single' ,[TestController::class , 'news_single'])->name('news_single');
Route::get('/contact' ,[TestController::class , 'contact'])->name('contact');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\homeController;
use App\Http\Controllers\Web\PagesController;
use App\Http\Controllers\Web\articleController;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/terms-and-condition', [PagesController::class, 'termsAndCondition'])->name('termsAndCondition');
Route::get('/404', [PagesController::class, 'error404Page']);


Route::get('/allArticles',[articleController::class, 'allArticles'])->name('allArticles');
Route::get('/article/{slug}', [ArticleController::class, 'dynamicArticleView'])->name('dynamicArticleView');
Route::get('/category/{slug}', [ArticleController::class, 'dynamicCategoryView'])->name('dynamicCategoryView');


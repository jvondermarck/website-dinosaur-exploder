<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

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

/* ------------------------------------------------------------------------
| Public routing */
// Route::get('/', [UserController::class,'signin']);
Route::get('/', function () { return view('home'); })->name('home');
Route::get('about', function () { return view('about'); })->name('about');

Route::get('signin', [UserController::class,'signin'])->name('signin');
Route::post('authenticate', [UserController::class,'authenticate'])->name('authenticate');
Route::get('signup', [UserController::class,'signup'])->name('signup');
Route::post('adduser', [UserController::class,'add'])->name('adduser');


Route::get('public', [ArticleController::class,'giveLastestArticle'])->name('giveLastestArticle');
Route::get('getArticleInfoForum/{id}', [CommentController::class,'getArticleInfoForum'])->name('getArticleInfoForum');

// ------------------------------------------------------------------------

/* ------------------------------------------------------------------------
| Admin routing */
Route::prefix('admin')->middleware('auth.myuser')->group( function() {

	Route::get('account', [UserController::class,'account'])->name('account');
	Route::get('formpassword', [UserController::class,'formpassword'])->name('formpassword');
	Route::post('changepassword', [UserController::class,'changePassword'])->name('changepassword');
	Route::get('delete', [UserController::class,'delete'])->name('deleteuser');
	Route::get('signout', [UserController::class,'signout'])->name('signout');

	Route::prefix('article')->group( function() {
		Route::get('addarticle', [ArticleController::class,'addarticle'])->name('addarticle');
		Route::post('addOneArticle', [ArticleController::class,'addOneArticle'])->name('addOneArticle');
		Route::get('seeArticle', [ArticleController::class,'seeArticle'])->name('seeArticle');
		Route::get('getArticleInfo/{id}', [ArticleController::class,'getArticleInfo'])->name('getArticleInfo');
		Route::get('modifyArticle', [ArticleController::class,'modifyArticle'])->name('modifyArticle');
		Route::post('updateArticle', [ArticleController::class,'updateArticle'])->name('updateArticle');
		Route::get('onOffPublishing/{id}', [ArticleController::class,'onOffPublishing'])->name('onOffPublishing');
		Route::get('deleteArticle/{id}', [ArticleController::class,'deleteArticle'])->name('deleteArticle');

		Route::get('addComment/{id}', [CommentController::class,'addComment'])->name('addComment');
		Route::post('addOneComment/{id}', [CommentController::class,'addOneComment'])->name('addOneComment');

	});
});
// ------------------------------------------------------------------------

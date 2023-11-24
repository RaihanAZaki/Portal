<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\isLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/login', [SessionController::class, 'index']);
Route::post('/login/proses', [SessionController::class, 'login']);
Route::get('/logout', [SessionController::class, 'logout']);

Route::get('/announcement', [DashboardController::class, 'DataAnnouncement']);
Route::get('/article', [DashboardController::class, 'DataArticle']);
Route::get('/wiki', [DashboardController::class, 'DataWiki']);
Route::get('/gallery', [DashboardController::class, 'DataGallery']);
Route::get('/', [DashboardController::class, 'DataDashboard']);
Route::get('/contact', [ContactController::class, 'DataContact']);
Route::post('/send-message', [ContactController::class, 'send'])->name('contact.send');

Route::get('/admin/upload', [AdminController::class, 'PageUpload']);
Route::post('/admin/upload', [AdminController::class, 'import'])->name('csv.import');

// SESI ADMIN
Route::get('admin/dashboard', [AdminController::class, 'DataDashboard'])->middleware('isLogin');

Route::get('admin/announcement', [AdminController::class, 'DataAnnouncement'])->middleware('isLogin');
Route::post('admin/announcement', [AdminController::class, 'InsertAnnouncement'])->middleware('isLogin');
Route::get('admin/announcement/{id}', [AdminController::class, 'EditAnnouncement'])->middleware('isLogin');
Route::put('admin/announcement/{id}', [AdminController::class, 'UpdateAnnouncement'])->middleware('isLogin');
Route::delete('admin/announcement/{id}', [AdminController::class, 'DestroyAnnouncement'])->middleware('isLogin');

Route::get('admin/article', [AdminController::class, 'DataArticle'])->middleware('isLogin');
Route::post('admin/article', [AdminController::class, 'InsertArticle'])->middleware('isLogin');
Route::get('admin/article/{id}', [AdminController::class, 'EditArticle'])->middleware('isLogin');
Route::put('admin/article/{id}', [AdminController::class, 'UpdateArticle'])->middleware('isLogin');
Route::delete('admin/article/{id}', [AdminController::class, 'DestroyArticle'])->middleware('isLogin');

Route::get('admin/banner', [AdminController::class, 'DataBanner'])->middleware('isLogin');
Route::post('admin/banner', [AdminController::class, 'InsertBanner'])->middleware('isLogin');
Route::get('admin/banner/{id}', [AdminController::class, 'EditBanner'])->middleware('isLogin');
Route::put('admin/banner/{id}', [AdminController::class, 'UpdateBanner'])->middleware('isLogin');
Route::delete('admin/banner/{id}', [AdminController::class, 'DestroyBanner'])->middleware('isLogin');

Route::get('admin/wiki', [AdminController::class, 'DataWiki'])->middleware('isLogin');
Route::post('admin/wiki', [AdminController::class, 'InsertWiki'])->middleware('isLogin');
Route::get('admin/wiki/{id}', [AdminController::class, 'EditWiki'])->middleware('isLogin');
Route::put('admin/wiki/{id}', [AdminController::class, 'UpdateWiki'])->middleware('isLogin');
Route::delete('admin/wiki/{id}', [AdminController::class, 'DestroyWiki'])->middleware('isLogin');

Route::get('admin/gallery', [AdminController::class, 'DataGallery'])->middleware('isLogin');
Route::post('admin/gallery', [AdminController::class, 'InsertGallery'])->middleware('isLogin');
Route::get('admin/gallery/{id}', [AdminController::class, 'EditGallery'])->middleware('isLogin');
Route::put('admin/gallery/{id}', [AdminController::class, 'UpdateGallery'])->middleware('isLogin');
Route::delete('admin/gallery/{id}', [AdminController::class, 'DestroyGallery'])->middleware('isLogin');

Route::get('admin/user', [AdminController::class, 'DataUser'])->middleware('isLogin');
Route::post('admin/user', [AdminController::class, 'InsertUser'])->middleware('isLogin');
Route::get('admin/user/{id}', [AdminController::class, 'EditUser'])->middleware('isLogin');
Route::put('admin/user/{id}', [AdminController::class, 'UpdateUser'])->middleware('isLogin');
Route::delete('admin/user/{id}', [AdminController::class, 'DestroyUser'])->middleware('isLogin');

Route::get('admin/menu', [AdminController::class, 'DataMenu'])->middleware('isLogin');
Route::post('admin/menu', [AdminController::class, 'InsertMenu'])->middleware('isLogin');
Route::get('admin/menu/{id}', [AdminController::class, 'EditMenu'])->middleware('isLogin');
Route::put('admin/menu/{id}', [AdminController::class, 'UpdateMenu'])->middleware('isLogin');
Route::delete('admin/menu/{id}', [AdminController::class, 'DestroyMenu'])->middleware('isLogin');


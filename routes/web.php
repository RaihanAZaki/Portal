<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExcellController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PasswordController;
use App\Http\Middleware\isLogin;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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
Route::get('/', [DashboardController::class, 'DataDashboard'])->name('dashboard');
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

Route::get('admin/profile', [PasswordController::class, 'Profile'])->middleware('isLogin');
Route::post('admin/profile', [PasswordController::class, 'ProcessProfile'])->name('change-password')->middleware('isLogin');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('dashboard')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

Route::controller(ExcellController::class)->group(function(){
    Route::get('admin/karyawan', 'index')->middleware('isLogin');;
    Route::post('admin/karyawan-import', 'import')->name('karyawan.import')->middleware('isLogin');;
});
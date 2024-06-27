<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogView;
use App\Http\Controllers\gajahmadaindex;
use App\Http\Controllers\table;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Page10Controller;
use App\Http\Controllers\Page11Controller;
use App\Http\Controllers\VideoController;

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

// screen index gajah mada record

Route::get('/', [gajahmadaindex::class, 'index'])->middleware('guest')->name('gajahmada');

// login -> untuk ke dashboard admin
Route::get('/gajahmada/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/gajahmada/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
// login -> untuk ke dashboard admin -> end

Route::get('/Blog/Gajah/Mada/Record', [BlogView::class, 'index']);
Route::get('/blogs/{id}', [BlogView::class, 'show'])->name('blogs.show');

// dashboard admin \\   

// screen dashboard admin
Route::get('/dashboard/admin', [DashboardController::class, 'index'])->middleware('admin');
// screen dashboard admin end

// screen logo table
Route::get('/dashboard/table', [table::class, 'index'])->middleware('admin');
Route::get('/dashboard/table', [table::class, 'index'])->name('table.index')->middleware('admin');
// screen logo table and

// blog admin
Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('admin');
Route::get('/dashboard/blog', [BlogController::class, 'index'])->name('dashboard.blog.index');
Route::get('/dashboard/blog/create', [BlogController::class, 'create'])->name('dashboard.blog.create');
Route::post('/dashboard/blog', [BlogController::class, 'store'])->name('dashboard.blog.store');
Route::get('/dashboard/blog/{blog}', [BlogController::class, 'show'])->name('dashboard.blog.show');
Route::get('/dashboard/blog/{blog}/edit', [BlogController::class, 'edit'])->name('dashboard.blog.edit');
Route::put('/dashboard/blog/{blog}', [BlogController::class, 'update'])->name('dashboard.blog.update');
Route::delete('/dashboard/blog/{blog}', [BlogController::class, 'destroy'])->name('dashboard.blog.destroy');
// end

// videoadmin
Route::get('/videos', [VideoController::class, 'index'])->name('dashboard.videos.index')->middleware('admin');
Route::get('/videos/create', [VideoController::class, 'create'])->name('dashboard.videos.create')->middleware('admin');
Route::post('/videos', [VideoController::class, 'store'])->name('dashboard.videos.store')->middleware('admin');
Route::get('/videos/{video}', [VideoController::class, 'show'])->name('dashboard.videos.show')->middleware('admin');
Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])->name('dashboard.videos.edit')->middleware('admin');
Route::put('/videos/{video}', [VideoController::class, 'update'])->name('dashboard.videos.update')->middleware('admin');
Route::delete('/videos/{video}', [VideoController::class, 'destroy'])->name('dashboard.videos.destroy')->middleware('admin');
// end

//////////////////////////////////////////////dinamis gajah mada record//////////////////////////////////////////////////////////////////////////////////////


// ganti logo

Route::get('/', [gajahmadaindex::class, 'index'])->middleware('guest')->name('gajahmadaindex.index');
Route::get('/logo', [gajahmadaindex::class, 'showLogoForm'])->name('gajahmadaindex.logoForm');
Route::post('/logo', [gajahmadaindex::class, 'updateLogo']);

// ganti logo end

//////////////////////////////////////////////Artist//////////////////////////////////////////////////////////////////////////////////////

Route::get('/page1', function () {
    return view('arts/page1');
});

Route::get('/page2', function () {
    return view('arts/page2');
});

Route::get('/page3', function () {
    return view('arts/page3');
});

Route::get('/page4', function () {
    return view('arts/page4');
});

Route::get('/page5', function () {
    return view('arts/page5');
});

Route::get('/page6', function () {
    return view('arts/page6');
});

Route::get('/page7', function () {
    return view('arts/page7');
});

Route::get('/page8', function () {
    return view('arts/page8');
});

Route::get('/page9', function () {
    return view('arts/page9');
});

Route::get('/page10', [Page10Controller::class, 'page10'])->name('page10');
Route::get('/page11', [Page11Controller::class, 'page11'])->name('page11');

//////////////////////////////////////////////sendemail//////////////////////////////////////////////////////////////////////////////////////
Route::get('/', [gajahmadaindex::class, 'index']);
Route::post('/send-email', [gajahmadaindex::class, 'sendEmail'])->name('send-email');
// Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('gajahmada.send-email');
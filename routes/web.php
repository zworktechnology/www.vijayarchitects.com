<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogmasterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TagmanagerController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'home'])->name('index');

Route::get('/about', [FrontendController::class, 'about'])->name('about');

Route::get('/service', [FrontendController::class, 'service'])->name('service');

Route::redirect('/service-details', '/service')->name('servicedetails');
Route::get('/service-details/{service}', [FrontendController::class, 'servicedetails'])->name('servicedetails.show');

Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');
Route::get('/projects/{project}', [FrontendController::class, 'projectShow'])->name('projects.show');

// PROJECT DETAILS

Route::get('/arulmani-house', [FrontendController::class, 'arulmanihouse'])->name('arulmanihouse');
Route::get('/the-thinnai-house', [FrontendController::class, 'thethinnaihouse'])->name('thethinnaihouse');
Route::get('/ravichandran-house', [FrontendController::class, 'ravichandranhouse'])->name('ravichandranhouse');
Route::get('/basker-shanthi-residence', [FrontendController::class, 'baskershanthiresidence'])->name('baskershanthiresidence');
Route::get('/hindustan-school-of-architecture', [FrontendController::class, 'hindustanschoolofarchitecture'])->name('hindustanschoolofarchitecture');
Route::get('/yercaud-house', [FrontendController::class, 'yercaudhouse'])->name('yercaudhouse');

Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/blog/info/{blog_id}', [FrontendController::class, 'blogdetails'])->name('blog.info');
// Route::get('/blog-details', [FrontendController::class, 'blogdetails'])->name('blogdetails');

Route::redirect('/amc-plans', '/service', 301)->name('amcplans');

// Route::get('/amc', [FrontendController::class, 'amc'])->name('amc');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// PAGE
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/page/index', [PageController::class, 'index'])->name('page.index');

    Route::middleware(['auth:sanctum', 'verified'])->post('/page/store', [PageController::class, 'store'])->name('page.store');

    Route::middleware(['auth:sanctum', 'verified'])->post('/page/update/{unique_code}', [PageController::class, 'update'])->name('page.update');

    Route::middleware(['auth:sanctum', 'verified'])->put('/page/delete/{unique_code}', [PageController::class, 'softdelete'])->name('page.delete');
});

// PAGE
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/meta/index', [MetaController::class, 'index'])->name('meta.index');

    Route::middleware(['auth:sanctum', 'verified'])->post('/meta/store', [MetaController::class, 'store'])->name('meta.store');

    Route::middleware(['auth:sanctum', 'verified'])->post('/meta/update/{unique_code}', [MetaController::class, 'update'])->name('meta.update');

    Route::middleware(['auth:sanctum', 'verified'])->put('/meta/delete/{unique_code}', [MetaController::class, 'softdelete'])->name('meta.delete');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/tagmanager/index', [TagmanagerController::class, 'index'])->name('tagmanager.index');

    Route::middleware(['auth:sanctum', 'verified'])->post('/tagmanager/store', [TagmanagerController::class, 'store'])->name('tagmanager.store');

    Route::middleware(['auth:sanctum', 'verified'])->post('/tagmanager/update/{unique_code}', [TagmanagerController::class, 'update'])->name('tagmanager.update');

    Route::middleware(['auth:sanctum', 'verified'])->put('/tagmanager/delete/{unique_code}', [TagmanagerController::class, 'softdelete'])->name('tagmanager.delete');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/blogmaster/index', [BlogmasterController::class, 'index'])->name('blogmaster.index');

    Route::middleware(['auth:sanctum', 'verified'])->post('/blogmaster/store', [BlogmasterController::class, 'store'])->name('blogmaster.store');

    Route::middleware(['auth:sanctum', 'verified'])->post('/blogmaster/update/{unique_code}', [BlogmasterController::class, 'update'])->name('blogmaster.update');

    Route::middleware(['auth:sanctum', 'verified'])->put('/blogmaster/delete/{unique_code}', [BlogmasterController::class, 'softdelete'])->name('blogmaster.delete');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/blog/index', [BlogController::class, 'index'])->name('blog.index');

    Route::middleware(['auth:sanctum', 'verified'])->get('/blog/create', [BlogController::class, 'create'])->name('blog.create');

    Route::middleware(['auth:sanctum', 'verified'])->post('/blog/store', [BlogController::class, 'store'])->name('blog.store');

    Route::middleware(['auth:sanctum', 'verified'])->get('/blog/edit/{unique_code}', [BlogController::class, 'edit'])->name('blog.edit');

    Route::middleware(['auth:sanctum', 'verified'])->post('/blog/update/{unique_code}', [BlogController::class, 'update'])->name('blog.update');

    Route::middleware(['auth:sanctum', 'verified'])->put('/blog/lising/{unique_code}', [BlogController::class, 'lising'])->name('blog.lising');

    Route::middleware(['auth:sanctum', 'verified'])->put('/blog/unlising/{unique_code}', [BlogController::class, 'unlising'])->name('blog.unlising');

    Route::middleware(['auth:sanctum', 'verified'])->put('/blog/pin/{unique_code}', [BlogController::class, 'pin'])->name('blog.pin');

    Route::middleware(['auth:sanctum', 'verified'])->put('/blog/unpin/{unique_code}', [BlogController::class, 'unpin'])->name('blog.unpin');

    Route::middleware(['auth:sanctum', 'verified'])->put('/blog/delete/{unique_code}', [BlogController::class, 'softdelete'])->name('blog.delete');
});

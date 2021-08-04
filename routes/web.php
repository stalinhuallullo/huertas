<?php

use Illuminate\Support\Facades\Route;

// USER
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProyectController;
use App\Http\Controllers\Web\DeluxeController;
use App\Http\Controllers\Web\NoveltiesController;
use App\Http\Controllers\Web\UsController;
use App\Http\Controllers\Web\ServicesController;
use App\Http\Controllers\Web\ContactController;

// ADMIN
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;


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

/*Route::get('/', function () {
    return view('welcome');
});
*/

// ************************************ HOME SECTION **********************************************
Route::get('/', [HomeController::class, 'index'])->name('web.home.index');


// ************************************ NOVELTIES SECTION **********************************************
Route::get('/novedades', [NoveltiesController::class, 'index'])->name('web.novelties.index');

// ************************************ NOVELTIES SECTION **********************************************
Route::get('/nosotros', [UsController::class, 'index'])->name('web.us.index');

// ************************************ PROYECT SECTION **********************************************
Route::get('/proyectos', [ProyectController::class, 'index'])->name('web.proyect.index');
Route::get('/proyectos/{slug}', [ProyectController::class, 'detail'])->name('web.proyect.detail');
Route::post('/proyectos/coordinar-visita', [ProyectController::class, 'coordinateVisit'])->name('web.proyect.coordinateVisit');


// ************************************ DELUXE SECTION **********************************************
Route::get('/deluxe', [DeluxeController::class, 'index'])->name('web.deluxe.index');


// ************************************ SERVICES SECTION **********************************************
Route::get('/servicios', [ServicesController::class, 'index'])->name('web.services.index');

// ************************************ CONTACT SECTION **********************************************
Route::get('/contacto', [ContactController::class, 'index'])->name('web.contact.index');



// ************************************ ADMIN HOME SECTION **********************************************
Route::get('/admin/iniciar-sesion', [LoginAdminController::class, 'index'])->name('admin.login');
Route::get('/admin/inicio', [DashboardAdminController::class, 'index'])->name('admin.inicio');



/*
Route::group(['middleware'=>'permissions:products'],function(){
    // CREATE SECTION
    Route::get('/products/types', [AdminProductController::class, 'types'])->name('admin-prod-types');
    Route::get('/products/physical/create', [AdminProductController::class, 'createPhysical'])->name('admin-prod-physical-create');
    Route::post('/products/store', [AdminProductController::class, 'store'])->name('admin-prod-store');
});
*/


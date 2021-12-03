<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use App\Http\Controllers\ContactController;
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
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('contacts', 'ContactController');

$router = app(Router::class);

$router
->prefix('/')
->group(function () use ($router) {
    $router->get('/', [ContactController::class, 'index'])->name('contacts.index');
    $router->get('/create', [ContactController::class, 'create'])->name('contacts.create');
    $router->post('/store', [ContactController::class, 'store'])->name('contacts.store');
    $router->get('/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
    $router->put('/update/{id}', [ContactController::class, 'update'])->name('contacts.update');
    $router->delete('/delete/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});

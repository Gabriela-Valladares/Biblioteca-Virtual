<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LibroController;


Route::get('/', function () {
    return view('welcome');
});
// Libro
 //index
Route::get('/libro',[LibroController::class,'index'])->name('libro.index');

 // show
Route::get('/libro/{id}/show',[LibroController::class,'show'])->where('id','[0-9]+')->name('libro.show');

// CREATE Y STORE CONTACTO
Route::get('/libro/create',[LibroController::class,'create'])->name('libro.crear');
Route::post('/libro/create',[LibroController::class,'store'])->name('libro.store');

// EDIT Y UPDATE CONTACTO
Route::get('/libro/{id}/editar',[LibroController::class,'edit'])->whereNumber('id')->name('libro.editar');
Route::put('/libro/{id}/editar',[LibroController::class,'update'])->whereNumber('id')->name('libro.update');

// DESTROYD CONTACTO
Route::delete('/libro/{id}/borrar',[LibroController::class,'destroy'])->whereNumber('id')->name('libro.borrar');



// Prestamo
//index
Route::get('/prestamo',[PrestamoController::class,'index'])->name('prestamo.index');

 // show
Route::get('/prestamo/{id}/show',[PrestamoController::class,'show'])->where('id','[0-9]+')->name('prestamo.show');

// CREATE Y STORE CONTACTO
Route::get('/prestamo/create',[PrestamoController::class,'create'])->name('prestamo.crear');
Route::post('/prestamo/create',[PrestamoController::class,'store'])->name('prestamo.store');

// EDIT Y UPDATE CONTACTO
Route::get('/prestamo/{id}/editar',[PrestamoController::class,'edit'])->whereNumber('id')->name('prestamo.editar');
Route::put('/prestamo/{id}/editar',[PrestamoController::class,'update'])->whereNumber('id')->name('prestamo.update');

// DESTROYD CONTACTO
Route::delete('/prestamo/{id}/borrar',[PrestamoController::class,'destroy'])->whereNumber('id')->name('prestamo.borrar');


// Usuario
//index
Route::get('/usuario',[UsuarioController::class,'index'])->name('usuario.index');

 // show
Route::get('/usuario/{id}/show',[UsuarioController::class,'show'])->where('id','[0-9]+')->name('usuario.show');

// CREATE Y STORE CONTACTO
Route::get('/usuario/create',[UsuarioController::class,'create'])->name('usuario.crear');
Route::post('/usuario/create',[UsuarioController::class,'store'])->name('usuario.store');

// EDIT Y UPDATE CONTACTO
Route::get('/usuario/{id}/editar',[UsuarioController::class,'edit'])->whereNumber('id')->name('usuario.editar');
Route::put('/usuario/{id}/editar',[UsuarioController::class,'update'])->whereNumber('id')->name('usuario.update');

// DESTROYD CONTACTO
Route::delete('/usuario/{id}/borrar',[UsuarioController::class,'destroy'])->whereNumber('id')->name('usuario.borrar');

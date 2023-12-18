<?php

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

//Route::get('/home', 'App\Http\Controllers\Admin\HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/pagina', [App\Http\Controllers\PaginaController::class, 'index'])->middleware(['auth'])->name('pagina');

Route::get('/emails', [App\Http\Controllers\Admin\EmailController::class, 'index'])->middleware(['auth'])->name('emails.index');
Route::get('/emails/search', [App\Http\Controllers\Admin\EmailController::class, 'search'])->middleware(['auth'])->name('emails.search');
Route::get('/emails/searchName', [App\Http\Controllers\Admin\EmailController::class, 'searchName'])->middleware(['auth'])->name('emails.searchName');
Route::get('/emails/create', [App\Http\Controllers\Admin\EmailController::class, 'create'])->middleware(['auth'])->name('emails.create');
Route::any('/emails/store', [App\Http\Controllers\Admin\EmailController::class, 'store'])->middleware(['auth'])->name('emails.store');
Route::get('/emails/{id}/edit', [App\Http\Controllers\Admin\EmailController::class, 'edit'])->middleware(['auth'])->name('emails.edit');
Route::any('/emails/{id}/update', [App\Http\Controllers\Admin\EmailController::class, 'update'])->middleware(['auth'])->name('emails.update');
Route::get('/emails/{id}/show', [App\Http\Controllers\Admin\EmailController::class, 'show'])->middleware(['auth'])->name('emails.show');
Route::delete('/emails/{id}/destroy', [App\Http\Controllers\Admin\EmailController::class, 'destroy'])->middleware(['auth'])->name('emails.destroy');
//Route::get('/emails/cvf_convert_object_to_array', [App\Http\Controllers\Admin\EmailController::class, 'cvf_convert_object_to_array'])->middleware(['auth'])->name('emails.cvf_convert_object_to_array');


Route::get('/setores', [App\Http\Controllers\Admin\SetorController::class, 'index'])->middleware(['auth'])->name('setores.index');
Route::get('/setores/search', [App\Http\Controllers\Admin\SetorController::class, 'search'])->middleware(['auth'])->name('setores.search');
Route::get('/setores/searchSetor', [App\Http\Controllers\Admin\SetorController::class, 'searchSetor'])->middleware(['auth'])->name('setores.searchSetor');
Route::get('/setores/create', [App\Http\Controllers\Admin\SetorController::class, 'create'])->middleware(['auth'])->name('setores.create');
Route::any('/setores/store', [App\Http\Controllers\Admin\SetorController::class, 'store'])->middleware(['auth'])->name('setores.store');
Route::get('/setores/{id}/edit', [App\Http\Controllers\Admin\SetorController::class, 'edit'])->middleware(['auth'])->name('setores.edit');
Route::any('/setores/{id}/update', [App\Http\Controllers\Admin\SetorController::class, 'update'])->middleware(['auth'])->name('setores.update');
Route::get('/setores/{id}/show', [App\Http\Controllers\Admin\SetorController::class, 'show'])->middleware(['auth'])->name('setores.show');
Route::delete('/setores/destroy', [App\Http\Controllers\Admin\SetorController::class, 'destroy'])->middleware(['auth'])->name('setores.destroy');

Route::get('/filiais', [App\Http\Controllers\Admin\FilialController::class, 'index'])->middleware(['auth'])->name('filiais.index');
Route::get('/filiais/search', [App\Http\Controllers\Admin\FilialController::class, 'search'])->middleware(['auth'])->name('filiais.search');
Route::get('/filiais/searchFilial', [App\Http\Controllers\Admin\FilialController::class, 'searchFilial'])->middleware(['auth'])->name('filiais.searchFilial');
Route::get('/filiais/create', [App\Http\Controllers\Admin\FilialController::class, 'create'])->middleware(['auth'])->name('filiais.create');
Route::any('/filiais/store', [App\Http\Controllers\Admin\FilialController::class, 'store'])->middleware(['auth'])->name('filiais.store');
Route::get('/filiais/{id}/edit', [App\Http\Controllers\Admin\FilialController::class, 'edit'])->middleware(['auth'])->name('filiais.edit');
Route::any('/filiais/{id}/update', [App\Http\Controllers\Admin\FilialController::class, 'update'])->middleware(['auth'])->name('filiais.update');
Route::get('/filiais/{id}/show', [App\Http\Controllers\Admin\FilialController::class, 'show'])->middleware(['auth'])->name('filiais.show');
Route::delete('/filiais/destroy', [App\Http\Controllers\Admin\FilialController::class, 'destroy'])->middleware(['auth'])->name('filiais.destroy');

Route::get('/tipoDocumentos', [App\Http\Controllers\Admin\TipoDocumentoController::class, 'index'])->middleware(['auth'])->name('tipoDocumentos.index');
Route::get('/tipoDocumentos/search', [App\Http\Controllers\Admin\TipoDocumentoController::class, 'search'])->middleware(['auth'])->name('tipoDocumentos.search');
Route::get('/tipoDocumentos/searchTipoDocumento', [App\Http\Controllers\Admin\TipoDocumentoController::class, 'searchTipoDocumento'])->middleware(['auth'])->name('tipoDocumentos.searchTipoDocumento');
Route::get('/tipoDocumentos/create', [App\Http\Controllers\Admin\TipoDocumentoController::class, 'create'])->middleware(['auth'])->name('tipoDocumentos.create');
Route::any('/tipoDocumentos/store', [App\Http\Controllers\Admin\TipoDocumentoController::class, 'store'])->middleware(['auth'])->name('tipoDocumentos.store');
Route::get('/tipoDocumentos/{id}/edit', [App\Http\Controllers\Admin\TipoDocumentoController::class, 'edit'])->middleware(['auth'])->name('tipoDocumentos.edit');
Route::any('/tipoDocumentos/{id}/update', [App\Http\Controllers\Admin\TipoDocumentoController::class, 'update'])->middleware(['auth'])->name('tipoDocumentos.update');
Route::get('/tipoDocumentos/{id}/show', [App\Http\Controllers\Admin\TipoDocumentoController::class, 'show'])->middleware(['auth'])->name('tipoDocumentos.show');
Route::delete('/tipoDocumentos/destroy', [App\Http\Controllers\Admin\TipoDocumentoController::class, 'destroy'])->middleware(['auth'])->name('tipoDocumentos.destroy');


Route::get('/grupos', [App\Http\Controllers\Admin\GrupoController::class, 'index'])->middleware(['auth'])->name('grupos.index');
Route::get('/grupos/search', [App\Http\Controllers\Admin\GrupoController::class, 'search'])->middleware(['auth'])->name('grupos.search');
Route::get('/grupos/searchGrupo', [App\Http\Controllers\Admin\GrupoController::class, 'searchGrupo'])->middleware(['auth'])->name('grupos.searchGrupo');
Route::get('/grupos/create', [App\Http\Controllers\Admin\GrupoController::class, 'create'])->middleware(['auth'])->name('grupos.create');
Route::any('/grupos/store', [App\Http\Controllers\Admin\GrupoController::class, 'store'])->middleware(['auth'])->name('grupos.store');
Route::get('/grupos/{id}/edit', [App\Http\Controllers\Admin\GrupoController::class, 'edit'])->middleware(['auth'])->name('grupos.edit');
Route::any('/grupos/{id}/update', [App\Http\Controllers\Admin\GrupoController::class, 'update'])->middleware(['auth'])->name('grupos.update');
Route::get('/grupos/{id}/show', [App\Http\Controllers\Admin\GrupoController::class, 'show'])->middleware(['auth'])->name('grupos.show');
Route::delete('/grupos/destroy', [App\Http\Controllers\Admin\GrupoController::class, 'destroy'])->middleware(['auth'])->name('grupos.destroy');

Route::get('/permissoes/{id}/index', [App\Http\Controllers\Admin\PermissaoController::class, 'index'])->middleware(['auth'])->name('permissoes.index');
Route::any('/permissoes/{id}/store', [App\Http\Controllers\Admin\PermissaoController::class, 'store'])->middleware(['auth'])->name('permissoes.store');
Route::any('/permissoes/{id}/edit', [App\Http\Controllers\Admin\PermissaoController::class, 'edit'])->middleware(['auth'])->name('permissoes.edit');
Route::any('/permissoes/{id}/update', [App\Http\Controllers\Admin\PermissaoController::class, 'update'])->middleware(['auth'])->name('permissoes.update');
Route::get('/permissoes/{id}/destroy', [App\Http\Controllers\Admin\PermissaoController::class, 'destroy'])->middleware(['auth'])->name('permissoes.destroy');


Route::resource("/usuarios", App\Http\Controllers\Admin\UserController::class);
Route::delete('/usuarios/destroy', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->middleware(['auth'])->name('usuarios.destroy');
Route::get('/usuarios/searchUsuario', [App\Http\Controllers\Admin\UserController::class, 'searchUsuario'])->middleware(['auth'])->name('usuarios.searchUsuario');
Route::any('/usuarios/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->middleware(['auth'])->name('usuarios.store');
Route::get('/usuarios/{id}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->middleware(['auth'])->name('usuarios.edit');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

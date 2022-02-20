<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cursos', function () {
    return view('cursos');
});
Route::get('/curso', function () {
    return view('curso');
});
Route::get('/miscursos', function () {
    return view('miscursos');
});
Route::get('/perfil', function () {
    return view('profile');
});
Route::get('/comunidad', function () {
    return view('comunidad');
});
Route::get('/3', function () {
    return view('3');
});
Route::get('/proyectos', function () {
    return view('proyectos');
});
Route::get('/preguntas', function () {
    return view('preguntas');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/live-cursos', function () {
    return view('datux-live-cursos');
});
Route::get('/referido', function () {
    return view('referido');
});
Route::get('/historial', function () {
    return view('historial');
});
Route::get('/live-curso', function () {
    return view('live-curso');
});
Route::get('/facturacion', function () {
    return view('facturacion');
});
Route::get('/finalizar', function () {
    return view('finalizar');
});
Route::get('/editar', function () {
    return view('editarPerfil');
});
Route::get('/cursos-mobile',function(){
    return view('mobile.cursos');
});
Route::get('/buscar-mobile', function(){
    return view('mobile.buscar');
});
Route::get('/cursos-mobile', function(){
    return view('mobile.cursos');
});
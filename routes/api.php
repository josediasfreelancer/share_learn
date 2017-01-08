<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('/landingpage', 'LandingPageApiController');

//Route::resource('/login', 'Login_RegistoApiController');

Route::resource('/editar-registo', 'Editar_RegistoApiController');

Route::resource('/editar-perfil', 'Editar_PerfilApiController');

Route::resource('/biblioteca-geral', 'Biblioteca_GeralApiController');

//Route::resource('/biblioteca-geral/{id}/detalhe', 'Biblioteca_Geral_DetalheApiController');
//
//Route::resource('/cronologia/{id}', 'Cronologia_ApiController');
//
//Route::resource('/biblioteca-pessoal', 'Biblioteca_PessoalApiController');
//
//Route::resource('/biblioteca-pessoal/{id}/detalhe', 'Biblioteca_Pessoal_DetalheApiController');
//
//Route::resource('/criar-conteudo', 'Criar_ConteudoApiController');
//
//Route::resource('/upload', 'PublicarApiController');
//
Route::resource('/look-learn-series', 'Lista_SeriesApiController');
//
//Route::resource('/look-learn-series/{id}/episodio', 'Lista_EpisodiosApiController');
//
Route::resource('/videos', 'Corre_AppApiController');
//
Route::resource('/sobre', 'SobreApiController');
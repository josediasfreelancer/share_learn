<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Aplicacao;

use DB;

/**
 * @resource LandingPage
 *
 * Método geral para chamar a biblioteca de conteúdos e inserção de comentários
 */


class LandingPageApiController extends Controller
{
    /**
     * -> Mostra a listagem das aplicações existentes, sendo que também contém comentários e utilizadores associados para cada aplicação.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
//        $user = User::get();
//        return $user;

//        $users = DB::table('aplicacao_user')->get();
//
//        return $users;

//        $user = User::with('user_tem_apps')->get();



//funka assim assim
//        $apps = Aplicacao::with('app_tem_users')->get();
//
//        return $apps;


        $comentario = Aplicacao::with('app_tem_comentarios','app_tem_users')->get();

        return $comentario;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * -> Inserção de comentários na store
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * -> Editar comentário da store.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * -> Eliminar comentário da store
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Aplicacao;
use DB;
/**
 * @resource Sobre
 *
 * Método geral para ler os detalhes do utilizador
 */
class SobreApiController extends Controller
{
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
//        $this->middleware('auth:api', ['except' => ['index','show']]);
    }
    /**
     * -> Lista os detalhes do utilizador
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        header('Access-Control-Allow-Origin: *');

//        $user = User::get();
//
//        $output = json_encode(array('data' => $user));
//
//        return $output;
        //        header('Access-Control-Allow-Origin: *');
        $array_sobre = DB::table('users')
            ->select('users.id_users', 'users.username', 'users.email', 'users.imagem_user', 'users.area_formacao', 'users.data_nascimento', 'users.localidade', 'users.nacionalidade','users.descricao')
            ->where('users.id_users', '=', 1)
            ->get();

        $output = json_encode(array('data' => $array_sobre));
        return $output;

    }

    /**
     * @hideFromAPIDocumentation
     */

    public function create()
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * -> Lista os detalhes do utilizador
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $array_sobre = DB::table('users')
            ->select('users.id_users', 'users.username', 'users.email', 'users.imagem_user', 'users.area_formacao', 'users.data_nascimento', 'users.localidade', 'users.nacionalidade','users.descricao')
            ->where('users.id_users', '=', $id)
            ->get();

        $output = json_encode(array('data' => $array_sobre));
        return $output;
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function edit($id)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy($id)
    {
        //
    }
}

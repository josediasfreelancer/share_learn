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
//        $this->middleware('auth:api');
    }
    /**
     * -> Lista os detalhes do utilizador
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * -> Lista os detalhes do utilizador por id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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

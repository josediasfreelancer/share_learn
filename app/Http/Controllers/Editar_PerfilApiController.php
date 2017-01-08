<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

/**
 * @resource Editar Perfil
 *
 * Método geral para alterar informações do user
 */
class Editar_PerfilApiController extends Controller
{
    /**
     * -> Lista as informações de todos os users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        header('Access-Control-Allow-Origin: *');

        $user = User::get();

        $output = json_encode(array('data' => $user));

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
     * -> Mostra os dados de um único utilizador - nome, email, imagem, ...
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        header('Access-Control-Allow-Origin: *');
        $dados_perfil = DB::table('users')
            ->select('users.id_users', 'users.username', 'users.email', 'users.imagem_user', 'users.area_formacao', 'users.data_nascimento', 'users.localidade', 'users.nacionalidade','users.descricao')
            ->where('users.id_users', '=', $id)
            ->get();

        $output = json_encode(array('data' => $dados_perfil));
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
     * -> Edita os dados de cada campo recebido
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        header('Access-Control-Allow-Origin: *');
        $data = $request->all();

        if ($request->has('area_formacao')) {
            $user = User::whereIdUsers($id)->first();
            $user->area_formacao = $data['area_formacao'];
            $user->save();
            return $this->_result('Area de formação editada com sucesso');
        }

        if ($request->has('data_nascimento')) {
            $user = User::whereIdUsers($id)->first();
            $user->email = $data['data_nascimento'];
            $user->save();
            return $this->_result('Data de nascimento alterada com sucesso');
        }

        if ($request->has('localidade')) {
            $user = User::whereIdUsers($id)->first();
            $user->password = $data['localidade'];
            $user->save();
            return $this->_result('Localidade alterada com sucesso');
        }

//
//        DB::table('users')
//            ->where('id_users', $id)
//            ->update(['username' => 'nuno']);

    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy($id)
    {
        //
    }

    private function _result($data, $status = 0, $msg = 'OK')
    {
        return json_encode(array(
            'status' => $status,
            'msg' => $msg,
            'data' => $data
        ));
    }
}

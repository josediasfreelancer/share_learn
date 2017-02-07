<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

/**
 * @resource Editar Registo
 *
 * Método geral para ler e alterar dados sensíveis do utilizador
 */

class Editar_RegistoApiController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth:api');
    }
    /**
     * -> Mostra o nome/email de todos os utilizadores.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * Mostra um único utilizador de acordo com o seu ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
     * -> Altera valores de nome/email/password
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $request->all();

        if ($request->has('username')) {
            $user = User::whereIdUsers($id)->first();
            $user->username = $data['username'];
            $user->save();
            return $this->_result('Username alterado com sucesso');
        }

        if ($request->has('email')) {
            $user = User::whereIdUsers($id)->first();
            $user->email = $data['email'];
            $user->save();
            return $this->_result('Email alterado com sucesso');
        }

        if ($request->has('password')) {
            $user = User::whereIdUsers($id)->first();
            $user->password = bcrypt($data['password']);
            $user->save();
            return $this->_result('Password alterada com sucesso');
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

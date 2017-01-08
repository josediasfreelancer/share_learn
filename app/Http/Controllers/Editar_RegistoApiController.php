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
    /**
     * -> Mostra o nome/email do utilizador.
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
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
        header('Access-Control-Allow-Origin: *');
        $dados_perfil = DB::table('users')
            ->select('users.id_users', 'users.username', 'users.email', 'users.imagem_user', 'users.area_formacao', 'users.data_nascimento', 'users.localidade', 'users.nacionalidade','users.descricao')
            ->where('users.id_users', '=', $id)
            ->get();

        $output = json_encode(array('data' => $dados_perfil));
        return $output;
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
     * -> Altera valores de nome/email/password
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        header('Access-Control-Allow-Origin: *');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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

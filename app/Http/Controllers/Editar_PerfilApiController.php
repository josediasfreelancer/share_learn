<?php

namespace App\Http\Controllers;

use App\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use Validator;



/**
 * @resource Editar Perfil
 *
 * Método geral para alterar informações do user
 */

class Editar_PerfilApiController extends Controller
{

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
//        $this->middleware('auth:api', ['except' => ['index','show']]);
    }

    /**
     * -> Lista as informações de todos os users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

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
        $data = $request->all();


        var_dump($data);

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
        header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
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
     * -> Altera imagem do user e guarda imagem no servidor- POST
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile($id, Request $request) {

        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $user = User::find($id);

        if ($user) {

            if ($request->hasFile('imagem_user')) {

                $file = $request->file('imagem_user');

                $path = $file->hashname();
                $file->move(public_path('images/profile'), $path);

                $user->imagem_user = 'images/profile/' . $path;
                $user->save();

                return $this->_result('Imagem alterada com sucesso');

            } else {
                return $this->_result('Erro de submisao');
            }
        }
        return $this->_result('User invalid', 404, 'Not Found');
    }


    /**
     * -> Altera imagem do user apenas por URL
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile2($id, Request $request){

        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

        $data = $request->all();

        $validator = Validator::make($data,
            [
                'imagem_user' => 'required',
            ],
            [
                'imagem_user' => 'O campo de imagem é obrigatório',
            ]
        );

        if($validator->fails()){

            $errors = $validator->errors()->all();

            return $this->_result($errors, 1, 'NOK');
        }

        $user = User::whereIdUsers($id)->first();
        $user->imagem_user = $data['imagem_user'];
        $user->save();
        return $this->_result('Imagem alterada com sucesso');

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
        header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $data = $request->all();

        if ($request->has('area_formacao')) {
            $user = User::whereIdUsers($id)->first();
            $user->area_formacao = $data['area_formacao'];
            $user->save();
            return $this->_result('Area de formação editada com sucesso');
        }

        if ($request->has('data_nascimento')) {
            $user = User::whereIdUsers($id)->first();
            $user->data_nascimento = $data['data_nascimento'];
            $user->save();
            return $this->_result('Data de nascimento alterada com sucesso');
        }

        if ($request->has('localidade')) {
            $user = User::whereIdUsers($id)->first();
            $user->localidade = $data['localidade'];
            $user->save();
            return $this->_result('Localidade alterada com sucesso');
        }

        if ($request->has('nacionalidade')) {
            $user = User::whereIdUsers($id)->first();
            $user->nacionalidade = $data['nacionalidade'];
            $user->save();
            return $this->_result('Nacionalidade alterada com sucesso');
        }

        if ($request->has('descricao')) {
            $user = User::whereIdUsers($id)->first();
            $user->descricao = $data['descricao'];
            $user->save();
            return $this->_result('Descrição alterada com sucesso');
        }

        else{
            return "erro de submissão";
        }

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

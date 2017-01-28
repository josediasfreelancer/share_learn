<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;
use DB;

/**
 * @resource Login/Registo
 *
 * Método geral para chamada de acesso e registo na API, com update de dados
 */

class Login_RegistoApiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * -> Login de utilizador
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dadosuser =  Auth::user();

        $output = json_encode(array('data' => $dadosuser));

        return $output;

//        $user = User::find(54);
////        Auth::login($user);
//        // Creating a token without scopes...
//        $token = $user->createToken('Token Name')->accessToken;
//        $output = json_encode(array('data' => $token));
//        return $output;


    }

    /**
     * @hideFromAPIDocumentation
     */
    public function create()
    {
        //
    }

    /**
     * -> Registar utilizador
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $validator = Validator::make($data,
            [
                'username' => 'required',
                'email' =>'required',
                'password'=>'required',
            ],
            [
                'username.required' => 'Necessita de inserir um nome',
                'email.required' => 'Necessita de inserir um email',
                'password.required' => 'Necessita de inserir uma password',
            ]
        );

        if($validator->fails()){

            $errors = $validator->errors()->all();

            return $this->_result($errors, 1, 'NOK');
        }

        User::create(
            [
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'ref_id_users_tipo' => 1,
            ]
        );

        return $this->_result('Registo inserido com sucesso');

    }

    /**
     * @hideFromAPIDocumentation
     */
    public function show($id)
    {
        //
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

    /**
     * -> Verifica se o input do user corresponde ao da base de dados
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validacao(Request $request){


        $data = $request->all();

        if (Auth::attempt(array('email' => $data['email'], 'password' => $data['password'])))
        {


//            $user = DB::table('users')
//                ->select('users.*')
//                ->where('username', '=', $data['username'])
//                ->get();

//// Creating a token without scopes...
//            $user = User::find(1);
//            $token = $user->createToken('Token Name')->accessToken;
//
//        $output = json_encode(array('data' => $token));
//        return $output;

            return $this->_result('Entrou');

        }
        else{
            return $this->_result('Email ou password errada');
        }
    }

    public function logout(){

        Auth::logout();
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

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comentario;
use App\User;
use App\Aplicacao;
use Symfony\Component\HttpFoundation\Request;
use Validator;
use DB;

/**
 * @resource LandingPage
 *
 * Método geral para chamar a biblioteca de conteúdos e inserção de comentários
 */


class LandingPageApiController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth:api');
    }

    /**
     * -> Mostra a listagem das aplicações existentes, sendo que também contém comentários e utilizadores associados para cada aplicação.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $aplicacoes = Aplicacao::get();
        $apps = [];
        foreach ($aplicacoes as $app)
        {
            $application = array('app' => $app);

            $comentarios = Comentario::with('comentarios_do_user')

                ->whereRefIdAplicacao($app->id)
                ->get();

            foreach ($comentarios as $comment)
            {
                $application['coments'][] = $comment;
            }

            $apps[] = $application;
        }


        $output = json_encode(array('data' => $apps));

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
     * -> Inserção de comentários na store
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
//        var_dump($data); die();
        $validator = Validator::make($data,
            [
                'comentarios_texto' => 'required',
                'ref_id_aplicacao' =>'required',
                'ref_id_users'=>'required',
//                'imagem_user' => 'required|image',
            ],
            [
                'comentarios_texto.required' => 'Necessita de inserir um comentário para enviar a mensagem',
                'ref_id_aplicacao.required' => 'Necessita de existir uma aplicação',
                'ref_id_users.required' => 'Necessita de existir uma user',
//                'imagem_user' => 'O campo de imagem é obrigatório',
            ]
        );

        if($validator->fails()){

            $errors = $validator->errors()->all();

            return $this->_result($errors, 1, 'NOK');
        }

//        $path = $request->file('imagem_user')->hashname();
//        $request->file('imagem_user')->move(public_path('images/profile'), $path);

        Comentario::create(
            [
                'comentarios_texto' => $data['comentarios_texto'],
                'ativo' => 1,
                'ref_id_aplicacao' => $data['ref_id_aplicacao'],
                'ref_id_users' => $data['ref_id_users'],
//                'image' => $path
            ]
        );


        $comentario = Comentario::get();
        return $comentario;

    }

    /**
     * -> Lista os comentários de uma série
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $app = DB::table('aplicacaos')
            ->select('comentarios.*', 'users.*')
            ->join('comentarios', 'comentarios.ref_id_aplicacao', '=', 'aplicacaos.id')
            ->join('users', 'comentarios.ref_id_users', '=', 'id_users')
            ->whereId($id)->get();

        $output = json_encode(array('data' => $app));

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

    /**
     * -> Upload de imagem
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {

        $data = $request->all();

        $validator = Validator::make($data, [
            'imagem_user' => 'required|image'
        ],
            [
                'imagem_user.required' => 'O campo de imagem é obrigatório',
                'imagem_user.image' => 'O campo de imagem é tem de ser do tipo imagem',
            ]);

        if($validator->fails())
        {
            $errors = $validator->errors()->all();

            return $this->_result($errors, 1, 'NOK');
        }

        $path = $request->file('imagem_user')->hashName();
        $request->file('imagem_user')->move(public_path('images/profile'), $path);

        return $data;
    }

    private function _result($data, $status=0, $msg='OK'){
        return array(
            'status' => $status,
            'msg' => $msg,
            'data' => $data
        );
    }
}

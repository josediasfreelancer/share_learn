<?php

namespace App\Http\Controllers;

use App\Aplicacao;
use App\User;
use Illuminate\Http\Request;

use Validator;
use DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

/**
 * @resource Upload
 *
 * Método geral para upload de aplicações e acesso ao editor de conteúdos
 */
class PublicarApiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function index()
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function create()
    {
        //
    }

    /**
     * -> Armazena texto de uma nova aplicação
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id_user = Auth::id();

        $data = $request->all();

        $validator = Validator::make($data,
            [
                'nome' => 'required',
                'descricao' =>'required',
                'idade'=>'required',
                'ref_id_series' => 'required',
            ],
            [
                'nome.required' => 'Necessita de inserir um comentário para enviar a mensagem',
                'descricao.required' => 'Necessita de existir uma aplicação',
                'idade.required' => 'Necessita de existir uma user',
                'ref_id_series' => 'Tem de associar a uma serie',
            ]
        );

        if($validator->fails()){
            $errors = $validator->errors()->all();
            return $this->_result($errors, 1, 'NOK');
        }

        Aplicacao::create(
            [
                'nome' => $data['nome'],
                'descricao' => $data['descricao'],
                'imagem' => 'vazio',
                'ficheiro_inicial' => 'vazio',
                'ativo_app' => 1,
                'idade' => $data['idade'],
                'ref_id_episodios' => $data['ref_id_series'],
                'ref_id_disciplinas' => 1,
                'ref_id_tipos' => 4,
            ]
        );

        ///ir buscar ultima inserção na tabela de aplicações
        $app = Aplicacao::orderBy('created_at', 'desc')->first();

        //associa o id do utilizador a uma aplicação no pivot
        $user = User::find($id_user);
        $user->user_tem_apps()->attach($app);

        return $this->_result('Publicação feita com sucesso');
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
     * -> Armazena imagem e vídeo da nova aplicação
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upimagem(Request $request){

        $user = Aplicacao::orderBy('created_at', 'desc')->first();

        if ($user) {

            if ($request->hasFile('imagem')) {
                $file = $request->file('imagem');
                $path = $file->hashname();
                Image::make($file->getRealPath())->resize(600, 400)->save('images/app/' . $path);
                $user->imagem = 'images/app/' . $path;
                $user->save();
            }

            if($request->hasFile('ficheiro_inicial')){
                $file2 = $request->file('ficheiro_inicial');
                $path2 = $file2->hashname();
                $file2->move(public_path('videos'), $path2);
                $user->ficheiro_inicial = 'videos/' .$path2;
                $user->save();

                return $this->_result('Ficheiros submetidos com sucesso');
            }

            else {
                return $this->_result('Erro de submisao');
            }
        }
        return $this->_result('User invalid', 404, 'Not Found');
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

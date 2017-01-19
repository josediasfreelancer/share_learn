<?php

namespace App\Http\Controllers;

use App\Aplicacao;
use Illuminate\Http\Request;
use Validator;
use DB;

/**
 * @resource Upload
 *
 * Método geral para upload de aplicações e acesso ao editor de conteúdos
 */
class PublicarApiController extends Controller
{

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
//        $this->middleware('auth:api', ['except' => ['index','show']]);
    }
    /**
     * -> Mostra uma lista de aplicações já existentes
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * -> Armazena parâmetros necessários para que a aplicação fique disponível na biblioteca
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

        $data = $request->all();

        $validator = Validator::make($data,
            [
                'nome' => 'required',
                'descricao' =>'required',
                'idade'=>'required',
                'ref_id_series' => 'required',
                'imagem' => 'required',
                'ficheiro_inicial'=>'required',
            ],
            [
                'nome.required' => 'Necessita de inserir um comentário para enviar a mensagem',
                'descricao.required' => 'Necessita de existir uma aplicação',
                'idade.required' => 'Necessita de existir uma user',
                'ref_id_series' => 'Tem de associar a uma serie',
                'imagem.required' => 'O campo de imagem é obrigatório',
                'ficheiro_inicial' => 'O video é obrigatório',
            ]
        );

        if($validator->fails()){

            $errors = $validator->errors()->all();

            return $this->_result($errors, 1, 'NOK');
        }

//        //insere o path do ficheiro na BD e adiciona o ficheiro no servidor
//        $file = $request->file('imagem');
//        $path = $file->hashname();
//        $file->move(public_path('images/app'), $path);
//        $image_path = 'images/app/' . $path;

        Aplicacao::create(
            [
                'nome' => $data['nome'],
                'descricao' => $data['descricao'],
//                'imagem' => $image_path,
                'imagem' => $data['imagem'],
                'ficheiro_inicial' => $data['ficheiro_inicial'],
                'ativo_app' => 1,
                'idade' => $data['idade'],
                'ref_id_episodios' => $data['ref_id_series'],
                'ref_id_disciplinas' => 1,
                'ref_id_tipos' => 4,
            ]
        );

        //insere o autor da aplicação
        DB::insert('insert into aplicacao_user(ref_id_users, ref_id_aplicacao) values (?,?)', [1,1]);


        return $this->_result('Publicação feita com sucesso');

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
     * Update the specified resource in storage.
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

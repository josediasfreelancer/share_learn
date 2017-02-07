<?php

namespace App\Http\Controllers;

use App\Aplicacao;
use App\Canaltv;
use App\Disciplina;
use App\Episodios;
use App\Series;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Input;


/**
 * @resource Biblioteca Geral
 *
 * Controlador para listar todas as aplicações de second screen existentes
 */
class Biblioteca_GeralApiController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth:api');
    }

    /**
     * -> Lista as aplicações de todos os utilizadores e permite query das series por parametros de url
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

//        if($request->exists('series')){
//            return Series::orderBy('nome_series', 'asc')->get();
//        }
//        return Series::all();

        $series = (new Series)->newQuery();

        if($request->exists('series')){
            $series->orderBy('nome_series', 'asc');
        }

        if($request->has('nome_series')){
            $series->where('nome_series', $request->nome_series);
        }

        $series2 = Series::with('apps')->get();


        $id = 53;
//        $aplicacoes = Aplicacao::get();

        $aplicacoes = DB::table('aplicacaos')
            ->select('aplicacaos.*', 'aplicacao_user.*', 'users.username as autor')
            ->join('aplicacao_user', 'aplicacao_user.ref_id_aplicacao', '=' , 'aplicacaos.id')
            ->join('users', 'users.id_users', '=' , 'ref_id_users')
            ->whereIdUsers($id)
            ->get();


        $output = json_encode(array('data' => $aplicacoes, 'data2'=>$series->get(), 'data3' => $series2));


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
     * Mostra as aplicações de um utilizador
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $biblioteca_detalhe = DB::table('aplicacaos')
            ->select('aplicacaos.*', 'aplicacao_user.*', 'users.id_users as id_autor', 'users.username as autor')
            ->join('aplicacao_user', 'aplicacao_user.ref_id_aplicacao', '=' , 'aplicacaos.id')
            ->join('users', 'users.id_users', '=' , 'ref_id_users')
            ->whereId($id)->first();



        $output = json_encode(array('data' => $biblioteca_detalhe));
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
     * -> Eliminar aplicação
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $app = Aplicacao::whereId($id)->first();
        $app->delete();

//        DB::table('aplicacao_user')->where('ref_id_aplicacao', 33)->delete();

        return $this->_result('Aplicacao removida com sucesso');
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

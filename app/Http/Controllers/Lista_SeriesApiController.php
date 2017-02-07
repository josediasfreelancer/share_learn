<?php

namespace App\Http\Controllers;

use App\Episodios;
use App\Aplicacao;
use App\Series;
use App\User;
use Illuminate\Http\Request;
use DB;
/**
 * @resource Look&Learn - Séries
 *
 * Método geral para listar todas as séries de TV com app de second screen associada
 */
class Lista_SeriesApiController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth:api');
    }
    /**
     * -> Mostra todas as séries
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $series = Series::with('apps')->get();

        $output = json_encode(array('data' => $series));

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
     * -> Lista as aplicações associadas à serie selecionada
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $apps = DB::table('aplicacaos')->select('aplicacaos.id', 'aplicacaos.nome', 'aplicacaos.imagem','ficheiro_inicial' , 'series.nome_series')
            ->join('series', 'aplicacaos.ref_id_episodios', '=' , 'series.id_series')
            ->where('series.id_series', '=' , $id)
            ->get();

        $output = json_encode(array('data' => $apps));
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
     * -> Lista uma aplicação
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listaApp($id){


        $aplicacoes = Aplicacao::whereId($id)->first();

        $output = json_encode(array('data' => $aplicacoes));

        return $output;
    }

    /**
     * Seleciona todas as aplicações associadas a uma série, ou apenas uma aplicação - query por post
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function query(Request $request){

        $data = $request->all();

        if ($request->has('input')) {

            $keyword = $data['input'];

                $apps = DB::table('aplicacaos')->select('aplicacaos.id', 'aplicacaos.nome', 'aplicacaos.imagem','ficheiro_inicial' , 'series.nome_series')
                    ->join('series', 'aplicacaos.ref_id_episodios', '=' , 'series.id_series')
                    ->where('series.nome_series', '=' , $keyword)
                    ->orWhere('aplicacaos.nome', $keyword)
                    ->get();

            if(empty($apps[0])){
                return $this->_result('Essa procura não existe');
            }

            else{
                $output = json_encode(array('data' => $apps));
                return $output;
            }
        }

        else{
            return "input inválido";
        }
    }

    /**
     * Seleciona todas as aplicações de uma série - via GET
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function query2(Request $request){

//        $series = (new Aplicacao)->newQuery();
//
//        if($request->has('nome_series')){
//            $series->join('aplicacaos', 'aplicacaos.ref_id_episodios', '=' , 'series.id_series')
//                ->where('nome_series', $request->nome_series);
//        }

//        $series = (new Series)->newQuery();

        $apps = DB::table('series')
            ->select('aplicacaos.*')
            ->join('aplicacaos', 'aplicacaos.ref_id_episodios', '=' , 'series.id_series')
            ->where('series.nome_series', '=' , $request->nome_series);


        $output = json_encode(array('data2'=>$apps->get()));
        return $output;


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

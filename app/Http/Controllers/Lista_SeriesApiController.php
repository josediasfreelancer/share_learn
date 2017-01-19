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
        header('Access-Control-Allow-Origin: *');
//        $this->middleware('auth:api', ['except' => ['index','show']]);
    }
    /**
     * -> Mostra todas as séries
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        header('Access-Control-Allow-Origin: *');
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
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

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

    public function listaApp($id){

        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

        $aplicacoes = Aplicacao::whereId($id)->first();

        $output = json_encode(array('data' => $aplicacoes));

        return $output;
    }

    public function query(Request $request){

        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
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

    private function _result($data, $status = 0, $msg = 'OK')
    {
        return json_encode(array(
            'status' => $status,
            'msg' => $msg,
            'data' => $data
        ));
    }

}

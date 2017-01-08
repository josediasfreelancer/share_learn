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
 * Método geral para listar todas as aplicações de second screen existentes
 */
class Biblioteca_GeralApiController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth:api');
//    }


    /**
     * -> Lista as aplicações de todos os utilizadores e permite query das series por parametros de url
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        header('Access-Control-Allow-Origin: *');

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

//        return $series->get();

        $aplicacoes = Aplicacao::get();

        $output = json_encode(array('data' => $aplicacoes, 'data2'=>$series->get()));

//        $array_landingpage = Canaltv::with('series')->get();

//            return Series::where('nome_series', $request->nome_series)->get();

//        $array_series = Series::get();

//        $output = json_encode(array('data' => $array_biblioteca, 'data2'=>$array_series));

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
        $biblioteca_detalhe = Aplicacao::whereId($id)->first();

//        $limit = Input::get('limit') ?:3;
//        $users = User::paginate($limit);
//
//        return $this->respond([
//            'data' => $users->all(),
//            'paginator' => [
//                'total_count' => $users->getTotal(),
//                'total_pages' => ceil($users->getTotal() / $users-> getPerPage()),
//                'current_page' => $users->getCurrentPage(),
//                'limit' => $users->getPerPage(),
//            ]
//        ]);


        $output = json_encode(array('data' => $biblioteca_detalhe));
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
     * -> Eliminar aplicação
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $app = Aplicacao::whereId($id)->first();
        $app->delete();

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

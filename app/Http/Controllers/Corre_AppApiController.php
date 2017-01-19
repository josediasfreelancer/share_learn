<?php

namespace App\Http\Controllers;

use App\Aplicacao;
use Illuminate\Http\Request;
use DB;

/**
 * @resource Look&Learn - Video
 *
 * Método geral para correr um video que foi submetido no Share&Learn
 */
class Corre_AppApiController extends Controller
{

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
//        $this->middleware('auth:api', ['except' => ['index','show']]);
    }

    /**
     * -> Mostra todos os videos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        $videos = DB::table('aplicacaos')
            ->select('aplicacaos.nome', 'aplicacaos.ficheiro_inicial')
            ->get();

        $output = json_encode(array('data' => $videos));
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
     * Caminho para percorrer o video
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $video = DB::table('aplicacaos')
            ->select('aplicacaos.nome', 'aplicacaos.ficheiro_inicial')
            ->where('aplicacaos.id', '=', $id)
            ->get();

        $output = json_encode(array('data' => $video));
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
}

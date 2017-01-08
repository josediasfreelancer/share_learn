<?php

namespace App\Http\Controllers;

use App\Episodios;
use App\Aplicacao;
use App\Series;
use Illuminate\Http\Request;
use DB;
/**
 * @resource Look&Learn - Séries
 *
 * Método geral para listar todas as séries de TV com app de second screen associada
 */
class Lista_SeriesApiController extends Controller
{
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
}

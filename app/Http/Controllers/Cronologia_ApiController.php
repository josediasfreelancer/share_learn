<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

/**
 * @resource Cronologia
 *
 * Método geral de acesso à minha cronologia
 */

class Cronologia_ApiController extends Controller
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
        $dadosuser =  Auth::user();

        $output = json_encode(array('data' => $dadosuser));

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

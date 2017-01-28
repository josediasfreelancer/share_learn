<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');

//        $id = Auth::user();
//        return $this->_result($id);
//        return redirect('/api/biblioteca-geral');
    }

//    public function logout()
//    {
//        if (Auth::check()) {
//            //$id = Auth::user();
//            \Illuminate\Support\Facades\Auth::logout();
//            return $this->_result('loggout done');
//        } else {
//            return $this->_result('loggout fodete');
//        }
//    }
//
//    private function _result($data, $status = 0, $msg = 'OK')
//    {
//        return json_encode(array(
//            'status' => $status,
//            'msg' => $msg,
//            'data' => $data
//        ));
//    }
}

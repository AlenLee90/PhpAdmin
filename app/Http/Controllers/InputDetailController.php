<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InputDetail;

class InputDetailController extends Controller
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
		$datas = InputDetail::all();
        return view('inputDetail')->with('datas',$datas);
    }
}

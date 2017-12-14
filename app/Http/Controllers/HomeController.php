<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        $datas = User::all();
        return view('home')->with('datas',$datas);
    }

	public function delete($id)
	{
		$deleteData = User::findOrFail($id);
		$deleteData->delete();
 
		$datas = User::all();
		return redirect()->route('home')->with('message', 'Succeed');
	}
	
	public function edit(Request $request)
    {
		$results = User::updateData($request);
		
		$datas = User::all();
        //return view('inputDetail')->with('message', '')->with('datas',$datas);
		return redirect()->route('home')->with('message', 'Succeed');
    }
}

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
        return view('inputDetail')->with('message', '')->with('datas',$datas);
    }
	
	public function delete($id)
	{
		$deleteData = InputDetail::findOrFail($id);
		$deleteData->delete();
 
		$datas = InputDetail::all();
		//return view('inputDetail')->with('message', 'Succeed')->with('datas',$datas);
		return redirect()->route('inputDetail')->with('message', 'Succeed');
	}
	
	public function edit(Request $request)
    {
		$results = InputDetail::updateData($request);
		
		$datas = InputDetail::all();
        //return view('inputDetail')->with('message', '')->with('datas',$datas);
		return redirect()->route('inputDetail')->with('message', 'Succeed');
    }
	
}

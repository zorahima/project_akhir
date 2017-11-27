<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pesanan;

class PesananController extends Controller
{
    //

	public function create()
	{
		return view('pesanans.create');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required',
			'bulan_mulai' => 'required',
		]);
		$input = $request->all();
		
		$pesanan = Pesanan::create($input);
		return redirect()->route('pesanan.create')
		->with('success','Pesanan berhasil dikirim');
	}

	public function index(Request $request) {
		$pesanans = Pesanan::orderBy('id','DESC')->paginate(5);
		return view('pesanans.index',compact('pesanans'))
		->with('i', ($request->input('page', 1) - 1) * 5);
	}
}

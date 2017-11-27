<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Upload;
class UploadController extends Controller
{

	
    //
	public function index(Request $request) {
		$uploads = Upload::orderBy('id','DESC')->paginate(5);
		return view('uploads.index',compact('uploads'))
		->with('i', ($request->input('page', 1) - 1) * 5);
	}
	public function create()
	{
		return view('uploads.create');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'bulan' => 'required',
			'image' => 'required|mimes:jpeg,png,jpg'
		]);

		$input = $request->all();

		$imageName = '';
		
		if ($request->hasFile('image')) {
			$imageExtension = $request->file('image')->getClientOriginalExtension();
			$imageName = 'image_'.time().'.'.$imageExtension;
			$imageDestination = base_path() . '/public/uploads';
			$request->file('image')->move($imageDestination, $imageName);
			$input['image'] = $imageName;
		}
		
		
		$upload = Upload::create($input);
		//return var_dump($request);
		
		return redirect()->route('upload.index')
					   	 ->with('success','Upload berhasil dilakukan');
	}
}



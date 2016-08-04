<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Picture;

class PictureController extends Controller{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(){
		$data = [
			'pictures' => Picture::all()
		];

		return view("pictures.index", $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(){
		return view("pictures.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request){
		$picture = Picture::create([
			'name' => $request->name,
			'code' => $request->code,
		]);

		// сохранение самой картинки в свг (позже, потому что название строим на основе id)
		file_put_contents(public_path().$picture->path_to_svg, $request->svg);

		return redirect(action('PictureController@edit', [$picture->id]));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id){
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Picture $picture){
		$data = [
			'picture' => $picture
		];

		return view("pictures.edit", $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Picture $picture){
		file_put_contents(public_path().$picture->path_to_svg, $request->svg);

		$picture->update([
			'name' => $request->name,
			'code' => $request->code,
		]);

		return back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id){
		//
	}
}

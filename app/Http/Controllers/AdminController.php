<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Stasiun;
use App\Wilayah;
use App\Info;
use App\Prediksi;
use App\Http\Requests\StoreWilayahRequest;
use App\Http\Requests\StoreInfoRequest;
use App\Http\Requests\StorePrediksiRequest;
use DB;
use File;
use Mapper;

class AdminController extends Controller
{
	private $stasiun;
	private $wilayah;
	private $stasiuns;



    public function __construct()
	{
		$this->middleware('auth');

		$this->stasiun= Stasiun::get();

		$this->stasiuns = Stasiun::All();
	}

	public function index()
	{
		$stasiuns = Stasiun::All();
		return view('admin.index', compact('stasiuns'));
	}

	public function login()
	{

	}

	public function wilayah(Request $request)
	{

		$stories = Wilayah::where('stasiun_id', $request->id )->paginate(20);
		$stasiuns = Stasiun::All();
		$id = intval($request->id);
		$namaStasiun = $stasiuns->where('id', $id)->first()->nama;
		//dd($stories->first()->stasiun());
		return view('admin.wilayah',compact('stories','stasiuns','namaStasiun','request'));
	}


	public function create(Request $request)
	{

		$selectedStasiun = Stasiun::where('id', $request->id)->first();
		$stasiuns= $this->stasiuns;
		//dd($selectedStasiun);
		return view('admin.create',compact('stasiuns','selectedStasiun','request'));
	}

	public function store(Wilayah $wilayah, Info $info, Prediksi $prediksi, StoreWilayahRequest $storeRequest)
	{
		//dd($request->stasiun_id);
		$wilayah->nama = $storeRequest->nama;
		$wilayah->lat = $storeRequest->lat;
		$wilayah->lon = $storeRequest->lon;
		$wilayah->stasiun_id = $storeRequest->stasiun_id;
		$wilayah->save();

		$info->wilayah_id = $wilayah->id;
		$info->save();
		$prediksi->wilayah_id = $wilayah->id;
		$prediksi->save();
		$request = $wilayah->stasiun_id;
		return redirect()->action('AdminController@wilayah', ['id' => $request]);
    //return view('admin.posts', compact('request'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Wilayah $wilayah)
	{
		$stasiuns = $this->stasiuns;
		$selectedStasiun = Stasiun::where('id', $wilayah->stasiun_id)->first();
		return view('admin.edit', compact('wilayah','stasiuns','selectedStasiun'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Wilayah $wilayah, Request $request)
	{

		$input = ['nama'=> $request->nama ,
			'lat' => $request->lat,
			'lon' => $request->lon];
		$wilayah->fill($input)->save();
		return redirect()->action('AdminController@wilayah', ['id' => $request->stasiun_id]);
	}
	public function delete(Wilayah $wilayah)
	{
		$stasiuns = $this->stasiuns;
		return view('admin.delete', compact('wilayah', 'stasiuns'));
	}
	public function destroy(Wilayah $wilayah)
	{
		$request = $wilayah->stasiun_id;
		$wilayah->delete();
		return redirect()->action('AdminController@wilayah', ['id' => $request]);
	}

	public function info(Wilayah $wilayah)
	{
		$stasiuns = $this->stasiuns;
		$anyInfo = Info::All()->where('wilayah_id', $wilayah->id)->first();
		//dd($anyInfo->wilayah->nama);
		return view('admin.infowilayah', compact('anyInfo','stasiuns'));
	}

	public function updateInfo(Info $info, StoreInfoRequest $request)
	{
		dd($info);
		$input = ['cuaca'=> $request->cuaca ,
			'arahangin' => $request->arahangin,
			'kecmin' => $request->kecmin,
			'kecmax' => $request->kecmax,
			'tinggimin' => $request->tinggimin,
			'tinggimax' => $request->tinggimax];
		$info->fill($input)->save();
		return redirect()->action('AdminController@info', ['id' => $info->wilayah->stasiun_id]);
	}

	public function prediksi(Wilayah $wilayah)
	{
		$stasiuns = $this->stasiuns;
		$anyPrediksi = Prediksi::All()->where('wilayah_id', $wilayah->id)->first();

		//dd($anyPrediksi);
		return view('admin.prediksiwilayah', compact('anyPrediksi','stasiuns'));
	}

	public function updatePrediksi(Prediksi $prediksi, StorePrediksiRequest $request)
	{
		$input = ['cuaca'=> $request->cuaca,
			'arahangin' => $request->arahangin,
			'kecmin' => $request->kecmin,
			'kecmax' => $request->kecmax,
			'tinggimin' => $request->tinggimin,
			'tinggimax' => $request->tinggimax];
		$prediksi->fill($input)->save();
		return redirect()->action('AdminController@wilayah', ['id' => $prediksi->wilayah->stasiun_id]);
	}

}

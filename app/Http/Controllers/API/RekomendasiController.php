<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Penanggulangan;
use App\Pupuk;
use App\RekomendasiPupuk;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = RekomendasiPupuk::leftJoin('penyakit', 'penyakit.id', 'rekomendasi_pupuk.id_penyakit')
        ->leftJoin('pupuk', 'pupuk.id', 'rekomendasi_pupuk.id_pupuk')
        ->where('rekomendasi_pupuk.id_penyakit', $id)
        ->select('pupuk.nama_pupuk', 'rekomendasi_pupuk.id')
        ->get();
        if ($data) {
            return response()->json(['status' => '200','data' => $data], 200);
        } else {
            return response()->json(['status' => '401','data' => 'Gagal mendapatkan data'], 401);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RekomendasiPupuk::leftJoin('pupuk', 'pupuk.id', 'rekomendasi_pupuk.id_pupuk')
        ->where('rekomendasi_pupuk.id', $id)
        ->select('rekomendasi_pupuk.*', 'pupuk.nama_pupuk')
        ->first();
        if ($data) {
            return response()->json(['status' => '200','data' => $data], 200);
        } else {
            return response()->json(['status' => '401','data' => 'Gagal mendapatkan data'], 401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Gejala;
use App\Http\Controllers\Controller;
use App\Penanggulangan;
use App\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penyakit::where('status', 'Show')->get();
        if ($data) {
            return response()->json(['status' => '200', 'data' => $data], 200);
        } else {
            return response()->json(['status' => '401', 'data' => 'Gagal mendapatkan data'], 401);
        }
    }

    public function listPenyakit()
    {

        $penyakit =  Penyakit::where('status', 'Show')->get();

        foreach ($penyakit as $item) {
            $gejala = Gejala::where('id_penyakit', $item->id)->select('nama_gejala')->first();
            $tmp = [
                'id' => $item->id,
                'nama' => $item->nama,
                'gambar' => $item->gambar,
                'gejala' => $gejala->nama_gejala,
            ];

            $data[] = $tmp;
        }

        if ($data) {
            return response()->json(['status' => '200', 'data' => $data], 200);
        } else {
            return response()->json(['status' => '401', 'data' => 'Gagal mendapatkan data'], 401);
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
     * @param  \App\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function show($penyakit)
    {
        $data = Penyakit::where('id', $penyakit)->first();

        if ($data) {
            return response()->json(['status' => '200', 'data' => $data], 200);
        } else {
            return response()->json(['status' => '401', 'data' => 'Gagal mendapatkan data'], 401);
        }
    }

    public function penanganan($penanganan)
    {
        $data = Penanggulangan::leftJoin('penyakit', 'penyakit.id', 'penanggulangan.id_penyakit')
            ->leftJoin('pupuk', 'pupuk.id', 'penanggulangan.id_pupuk')
            ->where('penanggulangan.id', $penanganan)
            ->select('pupuk.nama_pupuk', 'penyakit.nama', 'penanggulangan.aturan_pakai')
            ->first();
        if ($data) {
            return response()->json(['status' => '200', 'data' => $data], 200);
        } else {
            return response()->json(['status' => '401', 'data' => 'Gagal mendapatkan data'], 401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyakit $penyakit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penyakit $penyakit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyakit $penyakit)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Penyakit;
use App\Pupuk;
use App\RekomendasiPupuk;
use Illuminate\Http\Request;

class RekomendasiPupukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RekomendasiPupuk::leftjoin('penyakit', 'penyakit.id', 'rekomendasi_pupuk.id_penyakit')
        ->leftjoin('pupuk', 'pupuk.id', 'rekomendasi_pupuk.id_pupuk')
        ->select('penyakit.nama as penyakit', 'pupuk.nama_pupuk as pupuk', 'rekomendasi_pupuk.id')
        ->get();
        return view('rekomendasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pupuk = Pupuk::where('type', 'Pestisida')->get();

        $penyakit = Penyakit::all();
        return view('rekomendasi.add', compact('pupuk', 'penyakit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'penyakit' => 'required',
            'pupuk' => 'required',
            'aturan_pakai' => 'required',
        ]);

        $input = [
            'id_penyakit' => $request['penyakit'],
            'id_pupuk' => $request['pupuk'],
            'aturan_pakai' => $request['aturan_pakai'],
        ];

        try {
            RekomendasiPupuk::create($input);
            return redirect('/rekomendasi')->with('status', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return $th;
            return redirect('/rekomendasi/create')->with('status', 'Gagal mengubah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RekomendasiPupuk  $rekomendasiPupuk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RekomendasiPupuk::leftjoin('penyakit', 'penyakit.id', 'rekomendasi_pupuk.id_penyakit')
        ->leftjoin('pupuk', 'pupuk.id', 'rekomendasi_pupuk.id_pupuk')
        ->select('penyakit.nama as penyakit', 'pupuk.nama_pupuk as pupuk', 'rekomendasi_pupuk.id', 'rekomendasi_pupuk.aturan_pakai')
        ->where('rekomendasi_pupuk.id', $id)
        ->first();
        // return $data;
        return view('rekomendasi.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RekomendasiPupuk  $rekomendasiPupuk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pupuk = Pupuk::where('type', 'Pestisida')->get();
        $data = RekomendasiPupuk::where('id', $id)->first();
        $penyakit = Penyakit::all();
        return view('rekomendasi.edit', compact('pupuk', 'penyakit', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RekomendasiPupuk  $rekomendasiPupuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'penyakit' => 'required',
            'pupuk' => 'required',
            'aturan_pakai' => 'required',
        ]);

        $input = [
            'id_penyakit' => $request['penyakit'],
            'id_pupuk' => $request['pupuk'],
            'aturan_pakai' => $request['aturan_pakai'],
        ];

        try {
            RekomendasiPupuk::where('id', $id)->update($input);
            return redirect('/rekomendasi')->with('status', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return $th;
            return redirect('/rekomendasi/'.$id.'/edit')->with('status', 'Gagal mengubah data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RekomendasiPupuk  $rekomendasiPupuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(RekomendasiPupuk $rekomendasiPupuk)
    {
        //
    }
}

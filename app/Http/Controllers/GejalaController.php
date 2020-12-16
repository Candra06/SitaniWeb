<?php

namespace App\Http\Controllers;

use App\Gejala;
use App\Penyakit;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = Gejala::leftjoin('penyakit', 'penyakit.id', 'gejala.id_penyakit')
            ->select('penyakit.nama', 'gejala.*')
            ->get();
            return view('gejala.index', compact('data'));
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penyakit = Penyakit::all();
        return view('gejala.add', compact('penyakit'));
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
            'id_penyakit' => 'required',
            'nama_gejala' => 'required|max:60'
        ]);

        try {
            $in = [
                'nama_gejala' => $request['nama_gejala'],
                'id_penyakit' => $request['id_penyakit'],
            ];
            Gejala::create($in);
            return redirect('/gejala')->with('status', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            return $th;
            return redirect('/gejala/create')->with('status', $th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        try {
            $data = Gejala::leftjoin('penyakit', 'penyakit.id', 'gejala.id_penyakit')
            ->select('penyakit.nama', 'gejala.*')
            ->where('gejala.id', $gejala->id)->first();
            return view('gejala.detail', compact('data'));
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit(Gejala $gejala)
    {
        try {
            $penyakit = Penyakit::all();
            $data = Gejala::leftjoin('penyakit', 'penyakit.id', 'gejala.id_penyakit')
            ->select('penyakit.nama', 'gejala.*')
            ->where('gejala.id', $gejala->id)->first();
            return view('gejala.edit', compact('data', 'penyakit'));
        } catch (\Throwable $th) {
            return $th;
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gejala $gejala)
    {
        $request->validate([
            'id_penyakit' => 'required',
            'nama_gejala' => 'required|max:60'
        ]);

        try {
            $in = [
                'nama_gejala' => $request['nama_gejala'],
                'id_penyakit' => $request['id_penyakit'],
            ];
            Gejala::where('id', $gejala->id)->update($in);
            return redirect('/gejala')->with('status', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            return $th;
            return redirect('/gejala/create')->with('status', $th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gejala $gejala)
    {
        //
    }
}

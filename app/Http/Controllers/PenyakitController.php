<?php

namespace App\Http\Controllers;

use App\Penanggulangan;
use App\Penyakit;
use App\Pupuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penyakit::all();
        return view('penyakit.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penyakit.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'nama' => 'required|max:30',
            'deskripsi' => 'required',
            'penanganan' => 'required',
            'gambar' => 'file|between:0,2048|mimes:png,jpg,jpeg',
            'status' => 'required',
        ]);
        $fileType = $request->file('gambar')->extension();
        $name = Str::random(8) . '.' . $fileType;
        $input['nama'] = $request['nama'];
        $input['deskripsi'] = $request['deskripsi'];
        $input['penanganan'] = $request['penanganan'];
        $input['status'] = $request['status'];
        $input['gambar'] = Storage::putFileAs('hama', $request->file('gambar'), $name);

        try {
            // return $input;
            Penyakit::create($input);
            return redirect('/penyakit')->with('status', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            return $th;
            return redirect('/penyakit/create')->with('status', $th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function show(Penyakit $penyakit)
    {
        // return $penyakit;
        return view('penyakit.detail', compact('penyakit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyakit $penyakit)
    {
        return view('penyakit.edit', compact('penyakit'));
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
        $request->validate([
            'nama' => 'required|max:30',
            'deskripsi' => 'required',
            'penanganan' => 'required',
            'gambar' => 'file|between:0,2048|mimes:png,jpg,jpeg',
            'status' => 'required',
        ]);
        $fileType = $request->file('gambar')->extension();
        $name = Str::random(8) . '.' . $fileType;
        $input['nama'] = $request['nama'];
        $input['deskripsi'] = $request['deskripsi'];
        $input['penanganan'] = $request['penanganan'];
        $input['status'] = $request['status'];
        $input['gambar'] = Storage::putFileAs('hama', $request->file('gambar'), $name);

        try {
            // return $input;
            Penyakit::where('id', $penyakit->id)->update($input);
            return redirect('/penyakit')->with('status', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return $th;
            return redirect('/penyakit/'.$penyakit->id.'/edit')->with('status', $th);
        }
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

    public function detailPenanganan()
    {
        $penyakit = Penyakit::all();
        $pupuk = Pupuk::all();

        return view('penyakit.detail', compact('penyakit', 'pupuk'));
    }

    public function savePenanganan(Request $request)
    {
        $request->validate([
            'penyakit' => 'required',
            'pupuk' => 'required',
            'aturan_pakai' => 'required',
        ]);

        $input['id_penyakit'] = $request['penyakit'];
        $input['id_pupuk'] = $request['pupuk'];
        $input['aturan_pakai'] = $request['aturan_pakai'];

        try {
            Penanggulangan::create($input);
            return redirect('/penyakit')->with('status', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return redirect('/penanggulangan')->with('status', 'Gagal mengubah data');
        }
    }
}

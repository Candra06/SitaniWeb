<?php

namespace App\Http\Controllers;

use App\Pupuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PupukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pupuk::all();
        return view('pupuk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pupuk.add');
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
            'nama' => 'required|max:30',
            'harga' => 'required|max:6',
            'tipe' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
            'aturan' => 'required',
            'kandungan' => 'required',
            'gambar' => 'file|between:0,2048|mimes:png,jpg,jpeg',
            'status' => 'required',
        ]);

        $fileType = $request->file('gambar')->extension();
        $name = Str::random(8) . '.' . $fileType;
        $input['nama_pupuk'] = $request['nama'];
        $input['harga'] = $request['harga'];
        $input['type'] = $request['tipe'];
        $input['jenis'] = $request['jenis'];
        $input['deskripsi'] = $request['deskripsi'];
        $input['aturan_pakai'] = $request['aturan'];
        $input['kandungan'] = $request['kandungan'];
        $input['status'] = $request['status'];
        $input['gambar'] = Storage::putFileAs('pestisida', $request->file('gambar'), $name);

        try {
            // return $input;
            Pupuk::create($input);
            return redirect('/pupuk')->with('status', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            return $th;
            return redirect('/pupuk/create')->with('status', $th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pupuk  $pupuk
     * @return \Illuminate\Http\Response
     */
    public function show(Pupuk $pupuk)
    {
        return view('pupuk.detail', compact('pupuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pupuk  $pupuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Pupuk $pupuk)
    {
        return view('pupuk.edit', compact('pupuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pupuk  $pupuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pupuk $pupuk)
    {
        $request->validate([
            'nama' => 'required|max:30',
            'harga' => 'required|max:6',
            'tipe' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
            'aturan' => 'required',
            'kandungan' => 'required',
            'gambar' => 'file|between:0,2048|mimes:png,jpg,jpeg',
            'status' => 'required',
        ]);
        // return $request;
        $fileType = $request->file('gambar')->extension();
        $name = Str::random(8) . '.' . $fileType;
        $input['nama_pupuk'] = $request['nama'];
        $input['harga'] = $request['harga'];
        $input['type'] = $request['tipe'];
        $input['jenis'] = $request['jenis'];
        $input['deskripsi'] = $request['deskripsi'];
        $input['aturan_pakai'] = $request['aturan'];
        $input['kandungan'] = $request['kandungan'];
        $input['status'] = $request['status'];
        $input['gambar'] = Storage::putFileAs('pestisida', $request->file('gambar'), $name);

        try {
            // return $input;
            Pupuk::where('id', $pupuk->id)->update($input);
            return redirect('/pupuk')->with('status', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            return $th;
            return redirect('/pupuk/create')->with('status', $th);
        }
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pupuk  $pupuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pupuk $pupuk)
    {
        //
    }
}

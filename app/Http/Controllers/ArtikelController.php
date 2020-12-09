<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Artikel::join('users', 'users.id', 'artikel.penulis')->select('users.nama as penulis', 'artikel.judul', 'artikel.created_at', 'artikel.status', 'artikel.id')->get();
        return view('artikel.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.add');
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
            'judul' => 'max:50|required',
            'konten' => 'required',
            'status' => 'required',
            'thumbnail' => 'required|max:60',
            'gambar' => 'required',
        ]);

        $fileType = $request->file('gambar')->extension();
        $name = Str::random(8) . '.' . $fileType;
        $input['judul'] = $request['judul'];
        $input['konten'] = $request['konten'];
        $input['status'] = $request['status'];
        $input['thumbnail'] = $request['thumbnail'];
        $input['penulis'] = session('id');
        $input['gambar'] =  Storage::putFileAs('konten', $request->file('gambar'), $name);;

        try {
            Artikel::create($input);
            return redirect('/artikel')->with('status', 'Berhasil menambah data');
        } catch (\Throwable $th) {
            return $th;
            return redirect('/artikel/create')->with('status', 'Gagal menambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        return view('artikel.detail', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        return view('artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $artikel)
    {
        $request->validate([
            'judul' => 'max:50|required',
            'konten' => 'required',
            'status' => 'required',
            'thumbnail' => 'required|max:60',
            'gambar' => 'file|mimes:jpg,png,jpeg',
        ]);
        $fileType = $request->file('gambar')->extension();
        $name = Str::random(8) . '.' . $fileType;
        $input['judul'] = $request['judul'];
        $input['konten'] = $request['konten'];
        $input['status'] = $request['status'];
        $input['thumbnail'] = $request['thumbnail'];
        $input['gambar'] =  Storage::putFileAs('konten', $request->file('gambar'), $name);;

        try {
            Artikel::where('id', $artikel)->update($input);
            return redirect('/artikel')->with('status', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return $th;
            return redirect('/artikel/'.$artikel.'/edit')->with('status', 'Gagal mengubah data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        //
    }
}

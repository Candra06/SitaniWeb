<?php

namespace App\Http\Controllers;

use App\Cabai;
use Illuminate\Http\Request;

class CabaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cabai::all();
        return view('cabai.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabai.add');
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
            'jenis_cabai' => 'required',
            'nama_latin' => 'required',
            'status' => 'required',
        ]);

        $input['jenis_cabai'] = $request['jenis_cabai'];
        $input['nama_latin'] = $request['nama_latin'];
        $input['status'] = $request['status'];

        try {
            Cabai::create($input);
            return redirect('/cabai')->with('status', 'Berhasil menambah data');
        } catch (\Throwable $th) {
            return $th;
            return redirect('/cabai/create')->with('status', 'Ggagal menambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cabai  $cabai
     * @return \Illuminate\Http\Response
     */
    public function show(Cabai $cabai)
    {
        return view('cabai.detail', compact('cabai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cabai  $cabai
     * @return \Illuminate\Http\Response
     */
    public function edit(Cabai $cabai)
    {
        return view('cabai.edit', compact('cabai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cabai  $cabai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cabai $cabai)
    {
        $request->validate([
            'jenis_cabai' => 'required',
            'nama_latin' => 'required',
            'status' => 'required',
        ]);

        $input['jenis_cabai'] = $request['jenis_cabai'];
        $input['nama_latin'] = $request['nama_latin'];
        $input['status'] = $request['status'];

        try {
            Cabai::where('id', $cabai->id)->update($input);
            return redirect('/cabai')->with('status', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return redirect('/cabai/'.$cabai->id.'/edit')->with('status', 'Gagal mengubah data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cabai  $cabai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cabai $cabai)
    {
        //
    }
}

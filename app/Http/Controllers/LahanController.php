<?php

namespace App\Http\Controllers;

use App\Lahan;
use App\Panen;
use Illuminate\Http\Request;

class LahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = Lahan::leftJoin('users', 'users.id', 'lahan.id_petani')->select('users.nama', 'lahan.*')->get();
            // return $data;
            return view('lahan.index', compact('data'));
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
     * @param  \App\Lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function show(Lahan $lahan)
    {
        try {
            $data = Lahan::leftJoin('cabai as c', 'c.id', 'lahan.id_cabai')->select('lahan.*', 'c.jenis_cabai')->where('lahan.id', $lahan->id)->first();
            $total = Panen::where('id_lahan',$lahan->id)->sum('hasil');
            $panen = Panen::where('id_lahan', $lahan->id)->get();

            return view('lahan.detail', compact('data', 'total', 'panen'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function edit(Lahan $lahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lahan $lahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lahan $lahan)
    {
        //
    }
}

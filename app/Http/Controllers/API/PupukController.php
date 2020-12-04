<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Pupuk;
use Illuminate\Http\Request;

class PupukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pupuk::where('status', 'Show')->get();
        if ($data) {
            return response()->json(['status' => '200','data' =>$data], 200);
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
     * @param  \App\Pupuk  $pupuk
     * @return \Illuminate\Http\Response
     */
    public function show($pupuk)
    {
        $data = Pupuk::where('id', $pupuk)->first();
        if ($data) {
            return response()->json(['status' => '200','data' =>$data], 200);
        } else {
            return response()->json(['status' => '401','data' => 'Gagal mendapatkan data'], 401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pupuk  $pupuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Pupuk $pupuk)
    {
        //
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
        //
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

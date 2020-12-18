<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Lahan;
use App\Panen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        try {
            $data = Lahan::leftjoin('cabai', 'cabai.id', 'lahan.id_cabai')->select('cabai.jenis_cabai', 'lahan.*')->where('id_petani', $id)->get();
            return response()->json(['status' => '200', 'data' => $data], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => '401', 'data' => 'Gagal mendapatkan data'], 401);
        }
    }


    public function create()
    {

    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_lahan' => 'required',
            'id_cabai' => 'required',
            'luas' => 'required',
            'tanggal_tanam'  => 'required',
            'status'  => 'required'
        ]);

        $petani = Auth::user()->id;
        $input = [
            'id_cabai' => $request['id_cabai'],
            'nama_lahan' => $request['nama_lahan'],
            'luas' => $request['luas'],
            'id_petani' => $petani,
            'tanggal_tanam' => $request['tanggal_tanam'],
            'status' => $request['status'],
            'created_at' => date('Y-m-d H:i:s'),
        ];

        try {
            Lahan::create($input);
            return response()->json(['status' => '200', 'data' => 'Input Berhasil'], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => '401', 'data' => 'Gagal menambah data'], 401);
        }
    }


    public function show($id)
    {
        try {
            $data = Lahan::leftJoin('cabai as c', 'c.id', 'lahan.id_cabai')->select('lahan.*', 'c.jenis_cabai')->where('lahan.id', $id)->first();
            $total = Panen::where('id_lahan',$id)->sum('hasil');
            $panen = Panen::where('id_lahan', $id)->get();
            return response()->json(['status' => '200', 'data' => $data, 'panen' => $panen, 'total_panen' => $total], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'status'  => 'required'
        ]);
        $input = [
            'status' => $request['status'],
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        try {
            Lahan::where('id', $id)->update($input);
            return response()->json(['status' => '200', 'data' => 'Input Berhasil'], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => '401', 'data' => 'Gagal menambah data'], 401);
        }
    }


    public function destroy($id)
    {
        //
    }
}

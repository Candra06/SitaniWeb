<?php

namespace App\Http\Controllers\API;

use App\Cabai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CabaiController extends Controller
{
    public function index()
    {
        try {
            $data = Cabai::where('status', 'Show')->get();
            return response()->json(['status' => '200', 'data' => $data], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => '401', 'data' => 'Gagal mendapatkan data'], 401);
        }
    }
}

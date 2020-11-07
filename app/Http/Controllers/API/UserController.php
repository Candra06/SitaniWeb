<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = User::where('email',$email)->first();
        if($data){
            if(password_verify($password, $data->password)){
                $success['token'] =  $data->createToken('nApp')->accessToken;
                return response()->json(['data' => $success], 200);
            }else{
                return response()->json(['error' => bcrypt($password)], 401);
            }
        }
        else{
            return response()->json(['error' => 'Email Salah'], 401);
        }

    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'email|required',
            'password' => 'required',
            'kecamatan' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'username' => 'required',
        ]);

        $input['nama'] = $request['nama'];
        $input['password'] = bcrypt($request['password']);
        $input['email'] = $request['email'];
        $input['kecamatan'] = $request['kecamatan'];
        $input['alamat'] = $request['alamat'];
        $input['telepon'] = $request['telepon'];
        $input['username'] = $request['username'];
        $input['role'] = 'Petani';

        try {
            User::create($input);
            return response()->json(['data' => 'Register berhasil'], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th], 200);
        }
    }

    public function detail()
    {
        $user = Auth::user();
        // $role =  Auth::user()->role;
            // $data = User::join('users', 'users.id', 'data_siswa.id_akun')->where('data_siswa.id_akun', $user)->select('data_siswa.*', 'users.role', 'users.email')->first();


        return response()->json(['data' => $user], 200);
    }
}

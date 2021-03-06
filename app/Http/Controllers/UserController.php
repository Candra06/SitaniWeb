<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Penyakit;
use App\Pupuk;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        // dd(session('login'));
        return view('login');
    }

    public function dashboard()
    {
        $petani = User::where('role', 'petani')->count();
        $penyakit = Penyakit::count();
        $pupuk = Pupuk::count();
        $artikel = Artikel::count();
        return view('dashboard.index', compact('petani', 'pupuk', 'penyakit', 'artikel'));
    }

    public function logout(Request $request)
    {
        $request->session()->flash('login', 0);
        return redirect('/')->with('message', 'Berhasil Logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add');
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
            'nama' => 'max:50|required',
            'email' => 'max:50|email|required',
            'password' => 'required',
            'kecamatan' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        $input['nama'] = $request['nama'];
        $input['password'] = bcrypt($request['password']);
        $input['email'] = $request['email'];
        $input['kecamatan'] = $request['kecamatan'];
        $input['alamat'] = $request['alamat'];
        $input['telepon'] = $request['telepon'];
        $input['role'] = 'Petani';

        try {
            User::create($input);
            return redirect('/user')->with('status', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            return redirect('/user/create')->with('status', 'Gagal menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::where('id', $id)->first();
        // return $data;
        return view('users.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        return view('users.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'max:50|required',
            'email' => 'max:50|email|required',
            'password' => 'required',
            'kecamatan' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            // 'role' => 'required',
        ]);

        $input['nama'] = $request['nama'];
        $input['password'] = bcrypt($request['password']);
        $input['email'] = $request['email'];
        $input['kecamatan'] = $request['kecamatan'];
        $input['alamat'] = $request['alamat'];
        $input['telepon'] = $request['telepon'];
        // $input['role'] = $request['role'];
        if (session('id') == $id) {

            try {
                User::where('id', $id)->update($input);
                session()->put('email', $input['email']);
                session()->put('nama', $input['nama']);
                session()->put('username', $input['email']);
                return redirect('/user/' . $id );
            } catch (\Throwable $th) {
                return $th;
                return redirect('/user/' . $id . '/edit')->with('status', 'Gagal mengubah data');
            }
        } else {

            try {
                User::where('id', $id)->update($input);
                return redirect('/user/' . $id )->with('status', 'Berhasil mengubah data');
            } catch (\Throwable $th) {
                return $th;
                return redirect('/user/' . $id . '/edit')->with('status', 'Gagal mengubah data');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            User::where('id', $id)->delete();
            return redirect('/user')->with('status', 'Berhasil menghapus data');
        } catch (\Throwable $th) {
            return redirect('/user')->with('status', 'Gagal menghapus data');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $data = User::where('email', $request->email)->first();
        if ($data) {
            if ($data->role != 'Admin') {
                return redirect('/')->with('message', 'Anda bukan admin!');
            } else {
                if (password_verify($request->password, $data->password)) {
                    session()->put('login', true);
                    session()->put('email', $data->email);
                    session()->put('nama', $data->nama);
                    session()->put('username', $data->email);
                    session()->put('id', $data->id);
                    return redirect('dashboard')->with('message', 'Selamat datang!');
                } else {
                    return redirect('/')->with('message', 'Password salah!');
                }
            }
        } else {
            return redirect('/')->with('message', 'Email tidak teredaftar!');
        }
    }
}

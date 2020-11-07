<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        // dd(session('login'));
        return view('welcome');
    }

    public function dashboard()
    {
        return view('dashboard.index');
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
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request)
    {
        $data = User::where('email', $request->username)->first();
        if ($data) {
            if ($data->role != 'Admin') {
                return redirect('/')->with('message', 'Anda bukan admin!');
            } else {
                if (password_verify($request->password, $data->password)) {
                    session()->put('login', true);
                    session()->put('email', $data->email);
                    session()->put('nama', $data->nama);
                    session()->put('username', $data->username);
                    session()->put('id', $data->id);
                    return redirect('dashboard');
                } else {
                    return redirect('/')->with('message', 'Password salah!');
                }
            }

        } else {
            return redirect('/')->with('message', 'Email tidak teredaftar!');
        }

    }
}

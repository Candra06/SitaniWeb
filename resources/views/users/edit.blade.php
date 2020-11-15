@extends('template.app')

@section('content')
    <div class="content">
        <div class="page-inner py-5 panel-header bg-primary-gradient">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div class="">
                    <h2 class="text-white pb-2 fw-bold">Pengguna</h2>
                    <ul class="breadcrumbs">
                        <li class="nav-home text-white">
                            <a href="#">
                                <i class="flaticon-home text-white"></i>
                            </a>
                        </li>
                        <li class="separator text-white">
                            <i class="flaticon-right-arrow text-white"></i>
                        </li>
                        <li class="nav-item text-white">
                            <a href="#" class="text-white">Data Pengguna</a>
                        </li>
                        <li class="separator text-white">
                            <i class="flaticon-right-arrow text-white"></i>
                        </li>
                        <li class="nav-item text-white">
                            <a href="#" class="text-white">Tambah Data</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="page-inner mt--5">
            @if (session('status'))
                <script>
                    swal("Gagal!", "{{ session('status') }}!", {
                        icon: "error",
                        buttons: {
                            confirm: {
                                className: 'btn btn-danger'
                            }
                        },
                    });

                </script>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('/user/'.$data->id) }}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ubah Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email2">Nama</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                value="{{ $data->nama }}" name="nama" placeholder="Nama Lengkap">
                                            @error('nama')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email2">Telepon</label>
                                            <input type="text" class="form-control @error('telepon') is-invalid @enderror"
                                                value="{{ $data->telepon }}" name="telepon" placeholder="Nomor Telepon">
                                            @error('telepon')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Kecamatan</label>
                                            <input type="text" class="form-control @error('kecamatan') is-invalid @enderror"
                                                value="{{ $data->kecamatan }}" name="kecamatan" placeholder="Kecamatan">
                                            @error('kecamatan')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Alamat</label>
                                            <textarea name="alamat" id="" cols="3"
                                                class="form-control @error('alamat') is-invalid @enderror"
                                                value="" rows="1">{{ $data->alamat }}</textarea>
                                            @error('alamat')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email2">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                value="{{ $data->email }}" name="email" placeholder="example@gmail.com">
                                            @error('email')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                placeholder="Password">
                                            @error('password')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Role</label>
                                            <select class="form-control" name="role" id="exampleFormControlSelect1">
                                                <option>Pilih Role</option>
                                                <option value="Admin" {{ $data->role == 'Admin' ? 'selected' : '' }}>Admin
                                                </option>
                                                <option value="Petani" {{ $data->role == 'Petani' ? 'selected' : '' }}>
                                                    Petani</option>
                                            </select>
                                            @error('role')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-action mt-3">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

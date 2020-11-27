@extends('template.app')

@section('content')
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Penyakit dan Hama</h2>
                        <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="{{ url('/penyakit/create') }}" class="btn btn-secondary btn-round">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            @if (session('status'))
                <script>
                    swal("Berhasil", "{{ session('status') }}!", {
                        icon: "success",
                        buttons: {
                            confirm: {
                                className: 'btn btn-success'
                            }
                        },
                    });

                </script>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Penyakit dan Hama</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jenis</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td><a href="{{ url('penyakit/'. $item->id )}}">{{ $item->nama }}</a></td>
                                                <td>{{ $item->jenis}}</td>
                                                <td>{{ $item->status}}</td>
                                                <td class="mt-auto">
                                                    <a href="{{ url('/penyakit/'.$item->id.'/edit')}}" class="btn btn-xs btn-info mr-2 "><i class="fas fa-edit"></i></a>
                                                    {{-- <form action="{{ url('penyakit/'.$item->id) }}" method="POST" class="form-inline mt-auto">
                                                        @method('delete')
                                                        @csrf
                                                        <input type="hidden" name="id" value="">
                                                        <a href="{{ url('/penyakit/'.$item->id.'/edit')}}" class="btn btn-xs btn-info mr-2 "><i class="fas fa-edit"></i></a>
                                                        <button type="submit" class="btn btn-xs btn-primary"><i class="fas fa-trash"></i></button>
                                                    </form> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




            </div>


        </div>
    </div>
@endsection

@extends('template.app')

@section('content')
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Penyakit </h2>
                        <h5 class="text-white op-7 mb-2">List data penyakit cabai</h5>
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
                            <h4 class="card-title">Data Penyakit</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>
                                                    <div class="image" style="width: 60px; height: 60px; margin: 8px">
                                                        <img src="{{ asset($item->gambar) }}"
                                                            style="width: 100%; height: 100%; object-fit: cover;">
                                                    </div>
                                                </td>
                                                <td><a href="{{ url('penyakit/' . $item->id) }}">{{ $item->nama }}</a></td>
                                                <td>{{ $item->status }}</td>
                                                <td class="mt-auto">
                                                    <a href="{{ url('/penyakit/' . $item->id . '/edit') }}"
                                                        class="btn btn-xs btn-info mr-2 "><i class="fas fa-edit"></i></a>
                                                    {{-- <form
                                                        action="{{ url('penyakit/' . $item->id) }}" method="POST"
                                                        class="form-inline mt-auto">
                                                        @method('delete')
                                                        @csrf
                                                        <input type="hidden" name="id" value="">
                                                        <a href="{{ url('/penyakit/' . $item->id . '/edit') }}"
                                                            class="btn btn-xs btn-info mr-2 "><i
                                                                class="fas fa-edit"></i></a>
                                                        <button type="submit" class="btn btn-xs btn-primary"><i
                                                                class="fas fa-trash"></i></button>
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

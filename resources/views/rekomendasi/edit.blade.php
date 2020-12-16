@extends('template.app')

@section('content')
    <div class="content">
        <div class="page-inner py-5 panel-header bg-primary-gradient">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div class="">
                    <h2 class="text-white pb-2 fw-bold">Data Gejala Penyakit</h2>
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
                            <a href="{{ url('/gejala') }}" class="text-white">Data Gejala Penyakit</a>
                        </li>
                        <li class="separator text-white">
                            <i class="flaticon-right-arrow text-white"></i>
                        </li>
                        <li class="nav-item text-white">
                            <a href="#" class="text-white">Edit Data</a>
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
                    <form action="{{ url('/gejala/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email2">Penyakit</label>
                                            <select class="form-control @error('id_penyakit') is-invalid @enderror"
                                                name="id_penyakit" id="exampleFormControlSelect1">
                                                <option value="">Pilih Penyakit</option>
                                                @foreach ($penyakit as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $data->id_penyakit == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama }}
                                                    </option>

                                                @endforeach
                                            </select>
                                            @error('id_penyakit')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Nama Gejala</label>
                                            <input type="text"
                                                class="form-control @error('nama_gejala') is-invalid @enderror"
                                                value="{{ $data->nama_gejala }}" name="nama_gejala"
                                                placeholder="Nama Gejala">
                                            @error('nama_gejala')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="card-action mt-3">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="button" data-toggle="modal" data-target="#mdlCancel"
                                    class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal" id="mdlCancel" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin membatalkan proses?</p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ url('/penyakit') }}"><button type="button" class="btn btn-success">Ya</button></a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
        $(document).ready(function() {
            $('#penanggulangan').summernote();
        });
        $(document).ready(function() {
            $('#pencegahan').summernote();
        });

    </script>

    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();


            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });

    </script>
@endsection

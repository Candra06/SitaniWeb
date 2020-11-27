@extends('template.app')

@section('content')
    <div class="content">
        <div class="page-inner py-5 panel-header bg-primary-gradient">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div class="">
                    <h2 class="text-white pb-2 fw-bold">Hama dan Penyakit</h2>
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
                            <a href="#" class="text-white">Data Hama dan Penyakit</a>
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
                    <form action="{{ url('/penyakit/'.$penyakit->id) }}" method="POST" enctype="multipart/form-data">
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
                                            <label for="email2">Nama</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                value="{{ $penyakit->nama }}" name="nama" placeholder="Nama Pupuk"
                                                value="{{ $penyakit->nama }}">
                                            @error('nama')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Jenis</label>
                                            <select class="form-control" name="jenis" id="exampleFormControlSelect1">
                                                <option>Pilih Jenis</option>
                                                <option value="Penyakit" {{$penyakit->jenis == 'Penyakit' ? 'selected' : '' }}>Penyakit
                                                </option>
                                                <option value="Hama" {{$penyakit->jenis == 'Hama' ? 'selected' : '' }}>
                                                    Hama</option>
                                            </select>
                                            @error('jenis')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Ciri-ciri</label>
                                            <textarea class="form-control @error('ciri_ciri') is-invalid @enderror"
                                                id="summernote" name="ciri_ciri">{{ $penyakit->ciri_ciri }}</textarea>
                                            @error('ciri_ciri')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Penanggulangan</label>
                                            <textarea class="form-control @error('penanggulangan') is-invalid @enderror"
                                                id="penanggulangan" name="penanggulangan">{{ $penyakit->penanggulangan }}</textarea>
                                            @error('penanggulangan')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Pencegahan</label>
                                            <textarea cols="4" class="form-control @error('pencegahan') is-invalid @enderror" id="pencegahan"
                                                name="pencegahan">{{ $penyakit->pencegahan }}</textarea>
                                            @error('pencegahan')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email2">Gambar</label>
                                            <input type="file" name="gambar" id="input-file-now-custom-1" class="dropify @error('gambar') is-invalid @enderror"
                                                data-default-file="{{url('/'.$penyakit->gambar)}}"
                                                 />
                                            @error('gambar')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Status</label>
                                            <select class="form-control" name="status" id="exampleFormControlSelect1">
                                                <option>Pilih status</option>
                                                <option value="Show" {{ $penyakit->status == 'Show' ? 'selected' : '' }}>Show
                                                </option>
                                                <option value="Hidden" {{ $penyakit->status == 'Hidden' ? 'selected' : '' }}>
                                                    Hidden</option>
                                            </select>
                                            @error('status')
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

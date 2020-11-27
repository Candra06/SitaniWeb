@extends('template.app')

@section('content')
    <div class="content">
        <div class="page-inner py-5 panel-header bg-primary-gradient">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div class="">
                    <h2 class="text-white pb-2 fw-bold">Cabai</h2>
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
                            <a href="#" class="text-white">Data Cabai</a>
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
                    <form action="{{ url('/cabai') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email2">Penyakit</label>
                                            <select class="form-control" name="penyakit" id="exampleFormControlSelect1">
                                                <option value="">Pilih Penyakit atau Hama</option>
                                                @foreach ($penyakit as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ old('penyakit') == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            @error('penyakit')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Pupuk</label>
                                            <select class="form-control" name="pupuk" id="exampleFormControlSelect1">
                                                <option value="">Pilih Pupuk</option>
                                                @foreach ($pupuk as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ old('pupuk') == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama_pupuk }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            </select>
                                            @error('pupuk')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Aturan Pakai</label>
                                            <textarea class="form-control @error('aturan_pakai') is-invalid @enderror"
                                                id="summernote" name="aturan_pakai">{{ old('aturan_pakai') }}</textarea>
                                            @error('aturan_pakai')
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

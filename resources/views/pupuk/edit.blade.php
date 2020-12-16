@extends('template.app')

@section('content')
    <div class="content">
        <div class="page-inner py-5 panel-header bg-primary-gradient">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div class="">
                    <h2 class="text-white pb-2 fw-bold">Pupuk dan Pestisida</h2>
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
                            <a href="{{url('/pupuk')}}" class="text-white">Data Pupuk dan Pestisida</a>
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
                    <form action="{{ url('/pupuk/'.$pupuk->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
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
                                                value="{{ $pupuk->nama_pupuk }}" name="nama" placeholder="Nama Pupuk">
                                            @error('nama')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email2">Harga</label>
                                            <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                                value="{{ $pupuk->harga }}" name="harga" placeholder="Harga pasaran">
                                            @error('harga')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Tipe</label>
                                            <select class="form-control" name="tipe" id="exampleFormControlSelect1">
                                                <option value="">Pilih Tipe</option>
                                                <option value="Pupuk" {{ $pupuk->type == 'Pupuk' ? 'selected' : '' }}>Pupuk
                                                </option>
                                                <option value="Pestisida" {{ $pupuk->type == 'Pestisida' ? 'selected' : '' }}>
                                                    Pestisida</option>
                                            </select>
                                            @error('tipe')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Jenis</label>
                                            <select class="form-control" name="jenis" id="exampleFormControlSelect1">
                                                <option value="">Pilih Jenis</option>
                                                <option value="Organik" {{ $pupuk->jenis == 'Organik' ? 'selected' : '' }}>Organik
                                                </option>
                                                <option value="Kimia" {{ $pupuk->jenis == 'Kimia' ? 'selected' : '' }}>
                                                    Kimia</option>
                                            </select>
                                            @error('jenis')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Deskripsi</label>
                                            <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                                id="summernote" name="deskripsi">{{ $pupuk->deskripsi }}</textarea>
                                            @error('deskripsi')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Kandungan</label>
                                            <textarea class="form-control @error('kandungan') is-invalid @enderror"
                                                id="kandungan" name="kandungan">{{ $pupuk->kandungan }}</textarea>
                                            @error('kandungan')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Aturan Pakai</label>
                                            <textarea cols="4" class="form-control @error('aturan') is-invalid @enderror" id="aturan"
                                                name="aturan">{{ $pupuk->aturan_pakai }}</textarea>
                                            @error('aturan')
                                                <label class="mt-1" style="color: red">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email2">Gambar</label>
                                            <input type="file" name="gambar" id="input-file-now-custom-1" class="dropify @error('gambar') is-invalid @enderror"
                                                data-default-file="{{ url('/'.$pupuk->gambar)}}"
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
                                                <option value="">Pilih status</option>
                                                <option value="Show" {{ $pupuk->status == 'Show' ? 'selected' : '' }}>Show
                                                </option>
                                                <option value="Hidden" {{ $pupuk->status == 'Hidden' ? 'selected' : '' }}>
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
                                <button type="button"  data-toggle="modal" data-target="#mdlCancel" class="btn btn-danger">Cancel</button>
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
                  <a href="{{ url('/pupuk') }}"><button type="button" class="btn btn-success">Ya</button></a>
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
            $('#kandungan').summernote();
        });
        $(document).ready(function() {
            $('#aturan').summernote();
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

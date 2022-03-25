@extends('layouts.app2')

@section('judul')
    Profil {{ Auth::user()->name }}
@endsection
@section('content')
    <div class="col">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Profile</h3>
                </div>
                {{-- @if ($message = Session::get('sukses'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif --}}
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form" action="/profil/update/{{ Auth::user()->id }}" method="POST"
                        enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="col-md-1">
                                @if (isset(Auth::user()->foto))
                                    <img src="{{ asset('foto_profil/' . Auth::user()->foto) }}" class="img-circle"
                                        alt="User Image" style="height: 80px">
                                @else
                                    <img src="{{ asset('adminlte/dist/img/avatar04.png') }}" class="img-circle"
                                        alt="User Image" style="height: 80px">
                                @endif
                            </div>
                            <div class="col-md-11">
                                <div class="form-group">
                                    <label for="exampleInputFile">Ubah Profile</label>
                                    <input type="file" id="exampleInputFile" name="foto">

                                    <p class="help-block">File berbentuk jpeg/jpg/png dengan maksimal ukuran 200KB</p>
                                    @if ($errors->has('foto'))
                                        <div class="text-danger">
                                            {{ $errors->first('foto') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            @csrf
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Pengguna</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="nama">
                                @error('nama')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Kontak</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->nohp }}" name="nohp">
                                @error('nohp')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat">{{ Auth::user()->alamat }}</textarea>
                                @error('alamat')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group align-end">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- text input -->

                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->nik }}" name="nik">
                                @error('nik')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email Pengguna</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->email }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Update Terakhir</label>
                                <input type="text" class="form-control"
                                    value="{{ \Carbon\Carbon::parse(Auth::user()->updated_at)->isoFormat('D-M-Y h:mm:s') }}"
                                    disabled>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection

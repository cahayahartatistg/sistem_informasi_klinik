@extends('layout.boostrap')
@include('components/navbar');
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title">TAMBAH DATA PEGAWAI</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('pegawai.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama </label>
                                            <input type="text" class="form-control" name="nama_pegawai" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Alamat </label>
                                            <input type="text" class="form-control" name="alamat" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">No Telp</label>
                                            <input type="number" class="form-control" name="no_telp" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Penempatan</label>
                                            <select name="id_wilayah" id="" class="form-control">
                                                @foreach ($wilayah as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama_daerah }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right" name="masuk">Simpan</button>
                                <a href="{{ url('pegawai') }}" class="btn btn-danger pull-right mr-3">Kembali</a>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

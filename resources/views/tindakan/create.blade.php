@extends('layout.boostrap1')
@include('components/navbar');
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding-top: 70px">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">TAMBAH DATA TINDAKAN</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('tindakan.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Pasien </label>
                                            <select name="id_pasien" class="form-control">
                                                @foreach ($pasien as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_pasien }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Keluhan </label>
                                            <select name="id_pasien" class="form-control">
                                                @foreach ($pasien as $item)
                                                    <option value="{{ $item->id }}">{{ $item->keluhan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Tindakan</label>
                                            <input type="text" class="form-control" name="tindakan" id="">
                                            <a class="btn btn-primary pull-right"
                                                href="{{ url('tindakan/lanjuttindakan') }}">lanjut</a>
                                            <a href="{{ url('tindakan') }}"
                                                class="btn btn-danger pull-right mr-3">Kembali</a>

                                            <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@extends('layout.boostrap1');
@include('components/navbar');
@section('content');

    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">TABEL PENJUALAN OBAT</h4>

                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('keranjang.store') }}">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Obat</label>
                                            <input type="hidden" name="id_obat" value="<?= $id_obat ?>">
                                            <input type="text" class="form-control" name="id_obat"
                                                value="<?= $obat['nama_obat'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Jumlah Beli</label>
                                            <input type="text" class="form-control" name="jumlah">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Harga </label>
                                            <input type="text" class="form-control" name="harga_jual"
                                                value="<?= $obat['harga_jual'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right" name="masuk">Jual</button>
                                <a href="beli.php" class="btn btn-danger pull-right mr-3">Kembali</a>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

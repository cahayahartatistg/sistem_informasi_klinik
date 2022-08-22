@extends('layout.boostrap');
@include('components/navbar');
@section('content');

    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Data obat</h4>
                                <a href="{{ route('obat.create') }}" class="btn btn-primary float-left"> Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>

                                                <th>ID </th>
                                                <th>Nama Obat</th>
                                                <th>Jenis </th>
                                                <th>Stok </th>
                                                <th>Harga</th>

                                                <th class="text-center">
                                                    Aksi
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach ($obat as $key)
                                                <tr>
                                                    <td>{{ $no++ }}
                                                    <td>{{ $key->nama_obat }}</td>
                                                    <td>{{ $key->jenis_obat }}</td>
                                                    <td>{{ $key->stok_obat }}</td>
                                                    <td>{{ $key->harga }}</td>


                                                    <td class="d-flex justify-content-around">
                                                        <a class="btn btn-primary pull-right"
                                                            href="{{ route('obat.edit', $key->id) }}">Edit</a>
                                                        <form action="{{ route('obat.destroy', $key->id) }}" method="post"
                                                            onsubmit="return confirm('yakin hapus data?') ">
                                                            @csrf
                                                            @method('delete')

                                                            <button type="submit"
                                                                class="btn btn-danger pull-right mr-3">Hapus</button>
                                                        </form>
                                                    </td>
                                                    </td>
                                                </tr>
                                            @endforeach


                                    </table>

                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="https://creative-tim.com/presentation">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                </div>
            </div>
        </footer>
    </div>
@stop

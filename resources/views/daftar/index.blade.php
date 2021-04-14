@extends('layouts.app')

@section('content')



<div class="container">
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Selamat Datang {{Auth::user()->name}}</h1>
            </div>

            @if ($message = Session::get('simpan'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('hapus'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('update'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" href="/create">Tambah Data</a>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="card">
                                        <div class="section-title"></div>
                                        <div class="table-responsive">

                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>

                                                        <th scope="col">noReg</th>
                                                        <th scope="col">nama</th>
                                                        <th scope="col">jk</th>
                                                        <th scope="col">alamat</th>
                                                        <th scope="col">agama</th>
                                                        <th scope="col">asal_sekolah</th>
                                                        <th scope="col">minat_jurusan</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($daftar as $daftar)
                                                    <tr>

                                                        <td>{{$daftar->id}}</td>
                                                        <td>{{$daftar->nama}}</td>
                                                        <td>{{$daftar->jk}}</td>
                                                        <td>{{$daftar->alamat}}</td>
                                                        <td>{{$daftar->agama}}</td>
                                                        <td>{{$daftar->alamat}}</td>
                                                        <td>{{$daftar->asal_sekolah}}</td>
                                                        <td>{{$daftar->minat_jurusan}}</td>

                                                        <td>
                                                            <a href="/print/{{ $daftar->id }}" class="btn btn-secondary btn-sm">Print</a>

                                                            <a class="btn btn-primary" href="/edit/{{ $daftar->id }}">Edit</a>
                                                            <form action="/delete/{{ $daftar->id }}" method="post"  onclick="return confirm('Apakah yakin data akan di hapus?')">
                                                                @csrf
                                                                @method("delete")
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
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
            </div>
        </section>
    </div>


    <canvas id="myChart" height="158"></canvas>
</div>
</div>
</div>
</div>

@endsection
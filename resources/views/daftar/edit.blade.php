@extends('layouts.app', ['title'=>'daftar'])
@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">daftar daftar </div>

                <div class="card-body">
                    <form action="{{ route('daftar.update', [$daftar->id]) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                        @csrf

                        <div class="form-group">
                            <label for="nama">nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $daftar->nama }}">
                            @error('nama')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="jk">jenis kelamin</label>
                          
                                <select class="form-control" id="jk" name="jk" value="{{ $daftar->jk }}">
                                    <option hidden value="{{ $daftar->jk }}">{{ $daftar->jk }}</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>

                                </select>
                            </div>
                       


                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $daftar->alamat }}">
                            @error('alamat')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                      


                        <div class="form-group">
                            <label for="agama">agama</label>
                            <input type="text" name="agama" id="agama" class="form-control" value="{{ $daftar->agama }}">
                            @error('agama')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="asal_sekolah">asal_sekolah</label>
                            <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" value="{{ $daftar->asal_sekolah }}">
                            @error('asal_sekolah')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="minat_jurusan">minat_jurusan</label>
                            <input type="text" name="minat_jurusan" id="minat_jurusan" class="form-control" value="{{ $daftar->minat_jurusan }}">
                            @error('minat_jurusan')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-primary">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
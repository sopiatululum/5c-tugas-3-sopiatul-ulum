@extends('layout.master')
@section('title', 'Create Mahasiswa')
@section('content')


    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-12">
            <form action="/mahasiswaInsert" method="post" enctype="multipart/form-data">
                <div class="card">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="npm" name="npm" placeholder="Masukkan NPM">
                        <label for="npm">NPM</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                        <label for="nama">Nama</label>
                </div>
               <div class="form-check">
                    <input class="form-check-input" value="Perempuan" type="radio" name="jenis_kelamin" id="jenis_kelamin1">
                        <label class="form-check-label" for="jenis_kelamin1">
                           Perempuan
                        </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="Laki-Laki" type="radio" name="jenis_kelamin" id="jenis_kelamin2" checked>
                        <label class="form-check-label" for="jenis_kelamin2">
                            Laki-Laki
                        </label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                        <label for="alamat">Alamat</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="tempatlahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                        <label for="tempatlahir">Tempat Lahir</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="tanggallahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
                        <label for="tanggallahir">Tanggal Lahir</label>
                </div>
               <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                        <input class="form-control" type="file" id="formFile" name="photo">
                </div>
                 <button type="submit" class="btn text-white float-end" style="background-color: #1e97dd">Simpan</button>

                </div>
                @csrf
            </form>

                </div>
            </div>
        </div>
    </div>


@endsection

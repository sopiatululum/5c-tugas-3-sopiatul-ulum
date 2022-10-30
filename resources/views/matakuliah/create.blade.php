@extends('layout.master')
@section('title', 'Create Mata Kuliah')
@section('content')


    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-12">
            <form action="/matkulInsert" method="post" enctype="multipart/form-data">
                <div class="card">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="kodemk" name="kode_mk" placeholder="Masukkan Kode Mata Kuliah">
                        <label for="kodemk">Kode Mata Kuliah</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama" name="nama_mk" placeholder="Masukkan Nama">
                        <label for="nama">Nama Mata Kuliah</label>
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

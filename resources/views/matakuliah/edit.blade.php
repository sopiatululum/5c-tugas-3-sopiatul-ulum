@extends('layout.master')
@section('title', 'Edit Mata Kuliah')
@section('content')

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-12">
            <form action="/matkulUpdate/{{$data->id}}" method="post" enctype="multipart/form-data">
                <div class="card">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="kodemk" value="{{$data->kode_mk}}" name="kode_mk" placeholder="Masukkan Kode Mata Kuliah">
                        <label for="kode_mk">Kode Mata Kuliah</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama" value="{{$data->nama_mk}}" name="nama_mk" placeholder="Masukkan Nama">
                        <label for="nama">Nama Mata Kuliah</label>
                </div>
                <button type="submit" class="btn text-white float-end" style="background-color: #1e97dd">Simpan</button>
                </div>
            </div>
            @csrf
          </div>
    </div>



</body>
</html>


@endsection

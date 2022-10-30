@extends('layout.master')
@section('title', 'Dashboard')
@section('content')

<div class="container">
<div class="row m-3">
<h1 class="display-5">Dashboard</h1>
  <div class="col-sm-4">
    <div class="card">
     <div class="card-header">
      Dosen
     </div>
      <div class="card-body">
        <h5 class="card-title">Jumlah Dosen</h5>
        <p class="card-text">{{ $dosen }}</p>
        <a href="/dosen" class="btn text-white" style="background-color: #1e97dd">Lihat Detail</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
  <div class="card">
     <div class="card-header">
      Mahasiswa
     </div>
      <div class="card-body">
        <h5 class="card-title">Jumlah Mahasiswa</h5>
        <p class="card-text">{{ $mahasiswa }}</p>
        <a href="/mahasiswa" class="btn text-white" style="background-color: #1e97dd">Lihat Detail</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
     <div class="card-header">
      Mata Kuliah
     </div>
      <div class="card-body">
        <h5 class="card-title">Jumlah Mata Kuliah</h5>
        <p class="card-text">{{ $matkul }}</p>
        <a href="/matkul" class="btn text-white" style="background-color: #1e97dd">Lihat Detail</a>
      </div>
    </div>
  </div>
</div>
</div>

@endsection


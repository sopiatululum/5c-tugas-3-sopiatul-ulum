@extends('layout.master')
@section('title', 'Mahasiswa')
@section('content')

    <!--Jumbotron-->
    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="display-4">Selamat Datang di Halaman Mahasiswa</h1>
          <p class="lead">Berikut nama-nama mahasiswa/i Fasilkom Unsika Kelas E Angkatan 2020</p>
        </div>
      </section>
    <!--Jumbotron-->

    <div class="container">
    <div class="row justify-content-center my-3">
      <div class="col-10">
        <a href="mahasiswaCreate" class="btn text-white float-end" style="background-color: #1e97dd">Tambah</a>
      </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table">
                <thead class="table-light">
                  <tr>
                      <th scope="col-12">NPM</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->npm }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->jenis_kelamin }}</td>
                        <td>{{ $mahasiswa->alamat }}</td>
                        <td>{{ $mahasiswa->tempat_lahir }}</td>
                        <td>{{ $mahasiswa->tanggal_lahir }}</td>
                        <td>{{ $mahasiswa->photo }}</td>
                        <td>
                                <a href="mahasiswadelete/{{$mahasiswa->id}}" class="btn text-white float-end" style="background-color: #f3130b">Hapus</a>
                             </td>
                            <td>
                                <a href="mahasiswaEdit/{{$mahasiswa->id}}" class="btn text-white float-end" style="background-color: #f3130b">Edit</a>
                           </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
    </div>
    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
</body>
</html>

@endsection

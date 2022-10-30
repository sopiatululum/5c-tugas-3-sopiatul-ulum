<?php

//RawQuery

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', ['data' => $mahasiswa], ['title' => 'mahasiswa']);
    }
    public function create(){
        return view('mahasiswa.create');

    }

    public function insert(Request $request)
    {
        $mahasiswa = [
            'npm'=>$request->npm,
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
        ];
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time().$file->getClientOriginalName();
            $request->file('photo')->move(public_path('image/'), $filename);
            $mahasiswa['photo'] = $filename;
        }
        $mahasiswaInsert = Mahasiswa::create($mahasiswa);
        return redirect('/mahasiswa');
    }
    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit',['data' => $mahasiswa]);
    }

    public function update($id, Request $request)
    {
        $mahasiswaEdit = Mahasiswa::find($id);
        $mahasiswa = [
            'npm'=>$request->npm,
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
        ];
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time().$file->getClientOriginalName();
            $request->file('photo')->move(public_path('image/'), $filename);
            $mahasiswa['photo'] = $filename;
        }
        $mahasiswaEdit->update($mahasiswa);
        return redirect('/mahasiswa');
    }
}

// Raw SQL

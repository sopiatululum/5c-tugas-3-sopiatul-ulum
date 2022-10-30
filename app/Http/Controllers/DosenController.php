<?php

//Eloquent

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', ['data' => $dosen], ['title' => 'dosen']);
    }

    public function create(){
        return view('dosen.create');

    }

    public function insert(Request $request)
    {
        $dosen = [
            'nidn'=>$request->nidn,
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
            $dosen['photo'] = $filename;
        }
        $dosenInsert = Dosen::create($dosen);
        return redirect('/dosen');
    }

    //mengakses collection
    public function delete($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('/dosen');
    }

    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.edit',['data' => $dosen]);
    }

    public function update($id, Request $request)
    {
        $dosenEdit = Dosen::find($id);
        $dosen = [
            'nidn'=>$request->nidn,
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
            $dosen['photo'] = $filename;
        }
        $dosenEdit->update($dosen);
        return redirect('/dosen');
    }
}

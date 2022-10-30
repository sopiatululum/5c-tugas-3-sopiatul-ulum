<?php

//QueryBuilder

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matkul;

class MatkulController
{
    public function index()
    {
        $matkul = Matkul::all();
        return view('matakuliah.index', ['data' => $matkul], ['title' => 'Mata Kuliah']);
    }

    public function create(){
        return view('matakuliah.create');

    }
    public function insert(Request $request)
    {
        $mk = DB::table('matkuls')
            ->insert(
                [
                    'kode_mk' => $request->kode_mk,
                    'nama_mk' => $request->nama_mk,
                ]
            );
        return redirect('/matkul');
    }

    public function delete($id)
    {
        $mk = Matkul::find($id);
        $mk->delete();
        return redirect('/matkul');
    }

    public function edit($id)
    {
        $mk = Matkul::find($id);
        return view('matakuliah.edit',['data' => $mk]);
    }

    public function update($id, Request $request)
    {
        $mk = DB::table('matkuls')
        ->where('id',$id)
        ->update(
            [
                'kode_mk' => $request->kode_mk,
                'nama_mk' => $request->nama_mk,
            ]
        );
    return redirect('/matkul');
    }
}

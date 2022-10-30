<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $dosen = Dosen::count();
        $mahasiswa = Mahasiswa::count();
        $mk = Matkul::count();
        return view('dashboard.index', ['dosen' => $dosen, 'mahasiswa'=> $mahasiswa, 'matkul'=> $mk]);

    }
}

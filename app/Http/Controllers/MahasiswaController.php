<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\UserLogin;
use App\Models\Role;
// use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{
    public function index(){
        $dataMahasiswa = Mahasiswa::all();

        $dataUser = UserLogin::with('role')->get();

        return view('landingpage',[
            'dataMahasiswa'=>$dataMahasiswa,
            'dataUser'=>$dataUser
        ]);
    }
}

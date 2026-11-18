<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'Nazwa Firyal Khansa',
            'Ali Rizal',
            'Nala Fadillah',
        ];

        return view('pages.mahasiswa', [
            'mahasiswa' => $mahasiswa
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Collection;


class CollectionController extends Controller
{
    // Menampilkan daftar koleksi
   public function index()
{
    $collections = Collection::all();  // Fetch all collections
    $acaras = Acara::all();  // Fetch all events

    return view('collections.index', compact('collections', 'acaras'));

    $students = [
        [
            'nama' => 'Muhammad Yusni',
            'nim' => 'C030323038',
            'prodi' => 'Teknik Informatika',
            'kelas' => 'TI - 3C',
            'foto' => '/image/yusni.jpg',
        ],
        [
            'nama' => 'Sithi Nurhaliza',
            'nim' => 'C030323058',
            'prodi' => 'Teknik Informatika',
            'kelas' => 'TI - 3C',
            'foto' => '/image/liza.jpg',
        ],
    ];

    return view('collections.about', compact('students'));
}

    public function show($id)
    {
        $collection = Collection::findOrFail($id);
        return view('collections.show', compact('collection'));
    }
}

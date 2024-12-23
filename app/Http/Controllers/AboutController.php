<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Data statis
        $students = [
            [
                'name' => 'Muhammad Yusni',
                'id' => 'C030323038',
                'major' => 'D3 Teknik Informatika',
                'class' => 'TI - 3 C',
                'photo' => '/images/yusni.jpg',
            ],
            [
                'name' => 'Sithi Nurhaliza',
                'id' => 'C030323058',
                'major' => 'D3 Teknik Informatika',
                'class' => 'TI - 3 C',
                'photo' => '/images/liza.jpg',
            ],
        ];

        // Arahkan ke view dalam folder collections
        return view('collections.about', compact('students'));
    }
}

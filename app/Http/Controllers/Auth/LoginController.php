<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan Formulir Login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani Proses Login
    public function login(Request $request)
    {
        // Validasi input yang diberikan
        $credentials = $request->validate([
            'email' => 'required|email', // Pastikan email valid
            'password' => 'required', // Pastikan password tidak kosong
        ]);

        // Coba login dengan kredensial yang diberikan
        if (Auth::attempt($credentials)) {
            // Regenerasi sesi untuk mencegah session fixation
            $request->session()->regenerate();

            // Redirect ke halaman yang sebelumnya diminta, atau ke dashboard jika tidak ada
            return redirect()->intended('dashboard');
        }

        // Jika login gagal, kembalikan ke halaman login dengan error
        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok dengan data kami.',
        ]);
    }

    // Menangani Logout
    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna
        $request->session()->invalidate(); // Hapus sesi
        $request->session()->regenerateToken(); // Regenerasi token CSRF

        return redirect('/'); // Redirect ke halaman utama
    }
}

@extends('layout.app')
<div class="container">
    <div class="navbar">
        <a href="index.html">
            <img src="{{ asset('css/ikon.png') }}" id="logo">
        </a>
        <h1 class="tlogo">Héritage des Toiles</h1>
        <nav>
            <ul class="left-menu">
                <!-- Menu kiri kosong, hanya logo dan title -->
            </ul>

            <ul class="right-menu">
                <li><a href="" class="menu">Home</a></li>
                <li><a href="#event" class="menu">Event</a></li>
                <li><a href="#about">About</a></li>

                @guest
                <!-- Tampilkan Sign In jika belum login -->
                <li><a href="{{ route('login') }}" class="menu">Sign In</a></li>
                @endguest

                @auth
                <!-- Dropdown untuk nama pengguna jika sudah login -->
                <li class="dropdown">
                    <a href="#" class="menu dropdown-toggle">
                        {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="menu logout-btn">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
        </nav>
    </div>



    <div class="row">
        <div class="col-1">
            <h2>CANVAS VOYAGE</h2>
            <p>True art transcends time; it is a dialogue between the past and the beholder</p>
        </div>
        <div class="col-2">
            <img style="height: 550px" src="{{ asset('css/foto.webp') }}" class="rex">
        </div>
    </div>
</div>


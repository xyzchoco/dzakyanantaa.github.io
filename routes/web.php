<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Halaman Home']);
});

Route::get('/tentang', function () {
    return view('tentang', ['title' => 'Halaman Tentang']);
});

Route::get('/kontak', function () {
    return view('kontak', ['title' => 'Halaman Kontak']);
});

Route::get('/profil', function () {
    return view('profil', ['title' => 'Halaman Profil']);
});

Route::get('/kegiatan', function () {
    return view('kegiatan', ['title' => 'Halaman Kegiatan']);
});


Route::get('/presidium', function () {
    return view('presidium', ['title' => 'Halaman Presidium']);
});

Route::get('/admin', function () {
    return view('admin', ['title' => 'Admin Page']);
});


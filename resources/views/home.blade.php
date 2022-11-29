@extends('master')

@section('judulku', 'halaman utama')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')

@section('headerku')

    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Jumbotron Example</h1>
        <p>Lorem ipsum...</p>
    </div>

@endsection
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <p>Ini Adalah Halaman Home</p>
    <p>Selamat datang !</p>

@endsection

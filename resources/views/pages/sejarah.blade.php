@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white shadow-xl rounded-2xl p-6">
        <h1 class="text-3xl font-bold text-center mb-6">Sejarah Perusahaan</h1>

        <div class="mb-6">
            <img src="{{ asset('images/masjid_agung.jpg') }}" alt="Gambar Sejarah 1" class="w-full h-64 object-cover rounded-lg shadow-md mb-4">
            <p class="text-gray-700 text-justify">
                Perusahaan kami didirikan pada tahun 1990 oleh sekelompok pengrajin kayu yang memiliki visi untuk membawa produk furnitur lokal ke pasar global.
                Dalam perjalanannya, perusahaan telah berkembang dari skala kecil menjadi salah satu produsen furnitur terkemuka di Indonesia.
            </p>
        </div>

        <div class="mb-6">
            <img src="{{ asset('images/tanjirun_naja.jpg') }}" alt="Gambar Sejarah 2" class="w-full h-64 object-cover rounded-lg shadow-md mb-4">
            <p class="text-gray-700 text-justify">
                Pada tahun 2005, perusahaan mulai memperluas distribusi ke Asia Tenggara dan meraih berbagai penghargaan dalam inovasi desain dan kualitas produk.
            </p>
        </div>
    </div>
</div>
@endsection

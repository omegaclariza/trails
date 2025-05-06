@extends ('layout.app')
@section('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')
@section('content')
    <h1 class="text-2x1 font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>
    @include('components.card', [

        'imgsrc' => 'images/masjid_sultan2.jpg',
        'title' => 'Masjid Sultan Mahmud Riayat Syah',
        'description' => 'Masjid Sultan Mahmud Riayat Syah adalah sebuah masjid yang berada di kota Batam, Provinsi Kepulauan Riau, Indonesia'
    ])
@endsection
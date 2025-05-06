<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Tailwind CSS Lokal -->
    <link rel="stylesheet" href="{{ asset('style/tailwindcss3.4.1.js') }}">
</head>
<body class="bg-green-50">
    <div class="max-w-2xl mx-auto py-8 px-4">
        <div class="bg-yellow-200 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-800">Tailwind Local</h2>
            <p class="mt-2 text-gray-600">Ini contoh implementasi Tailwind: margin, padding, dan background-color</p>
        </div>
    </div>
</body>
</html>
</div>
=======
    <title>Halaman Tugas Public</title>

    <!-- Tailwind Standalone -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/styles/style1.css') }}">
</head>
<body class="bg-gray-100 p-6">

    <h1 class="text-3xl font-bold text-center text-red-600 mb-8">Tempat Ibadah</h1>

    <div class="flex flex-col md:flex-row justify-center items-center gap-8">
        <img src="{{ asset('/images/gereja_santopetrus.jpg') }}" alt="ibadah 1"
            class="w-[300px] rounded-xl shadow-xl hover:scale-105 hover:shadow-2xl transition-transform duration-500">

        <img src="{{ asset('/images/masjid_sultan2.jpg') }}" alt="ibadah 2"
            class="w-[300px] rounded-xl shadow-xl hover:scale-105 hover:shadow-2xl transition-transform duration-500">
    </div>

</body>
</html>
>>>>>>> ef6c8e4634c82768d3845f5f943bc29f6fd6639a

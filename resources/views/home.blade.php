<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

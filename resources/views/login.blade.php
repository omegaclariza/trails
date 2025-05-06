<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Load Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen bg-cover bg-center" style="background-image: url('/images/pluralisme.jpg')">

    <div class="bg-gray bg-opacity-10 p-10 rounded shadow-lg w-96">
        <h1 class="text-2xl font-bold mb-5 text-center">Login</h1>
        <form action="#" method="POST">
            <!-- Username -->
            <input type="text" placeholder="Username" class="border p-2 w-full mb-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 bg-transparent border-gray-300 bg-opacity-50 text-white" required>

            <!-- Password -->
            <input type="password" placeholder="Password" class="border p-2 w-full mb-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 bg-transparent border-gray-300 bg-opacity-50 text-white" required>

            <!-- Submit Button -->
            <button type="submit" class="bg-blue-500 text-white p-2 w-full rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
        </form>
    </div>

</body>
</html>


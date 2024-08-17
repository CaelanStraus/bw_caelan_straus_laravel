<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Pizza Palace</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">
    <!-- Welcome Section -->
    <div class="text-center p-8">
        <h1 class="text-5xl font-bold mb-6">Welcome to Pizza Palace</h1>
        <p class="text-xl mb-8">Where every slice is a masterpiece. The best pizza in town, served hot and fresh.</p>
        
        <!-- Login and Register Logic -->
        @if (Route::has('login'))
            <nav class="flex justify-center space-x-4">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-full text-lg transition duration-300 ease-in-out"
                    >
                        Dashboar
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-full text-lg transition duration-300 ease-in-out"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-full text-lg transition duration-300 ease-in-out"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</body>
</html>

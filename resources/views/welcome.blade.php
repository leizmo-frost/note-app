<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Note</title>
<link rel="preconnect" href="https://fonts.bunny.net/family/abeezee">
<link href="https://fonts.bunny.net/css?family=abhaya-libre:400;" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<style>
    /* Add your custom styles here */
    /* Background image */
    #background {
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
    }
</style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
    <header class="flex justify-between items-center py-10">
    <h1 class="text-3xl font-bold">Note</h1>
    <nav class="flex space-x-4">
        @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="bg-[#FF2D20] text-black py-2 px-4 rounded-md hover:bg-red-600 transition duration-300">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="bg-[#FF2D20] text-black py-2 px-4 rounded-md hover:bg-red-600 transition duration-300">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="bg-[#FF2D20] text-black py-2 px-4 rounded-md hover:bg-red-600 transition duration-300">Register</a>
            @endif
        @endauth
        @endif
    </nav>
    </header>

        <div class="container">
            <div class="contents">
                <div class=" row-auto px-4 py-8 bg-white shadow-lg rounded-lg border-dark  background-color-grey-light">
                    <h2 class="text-3xl font-bold mb-4">Welcome to Note</h2>
                    <p class="text-lg mb-4">Need to organize your mind and boost productivity?</p>
                    <p class="text-lg mb-4" > Look no further than Note. Create an account now and get started.</p>
                    <a href="{{ route('register') }}" class="bg-[#f33e3e] text-black py-2 px-4 rounded-md hover:bg-red-600 transition duration-300">Sign Up Now</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>

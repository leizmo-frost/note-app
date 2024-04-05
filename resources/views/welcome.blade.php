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
    /* Custom styles */

    body {
        margin: 0;
        padding: 0;
        font-family: 'abhaya-libre', sans-serif;
        color: black;
        background-color: #333; /* Dark gray background */
    }

    nav {
        position: fixed;
        top: 0;
        left: 80%;
        width: 100%;
        background-color: transparent; /* transparent background for nav */
        padding: 10px 20px;
        z-index: 999; /* Ensure it's above other content */
    }

    nav a {
        color: white;
        text-decoration: none;
        margin-right: 20px;
    }

    nav a:hover {
        color: #f33e3e; /* Red color on hover */
    }

    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        text-align: center; /* Center content */
        max-width: 600px;
        background-color: transparent; /* transparent background with 90% opacity */
        border-radius: 10px;
    }

    .content h1 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .content p {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .content a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #f33e3e; /* Red background color */
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .content a:hover {
        background-color: #d63030; /* Darker red on hover */
    }

    /* Full viewport height for the background image */
    .background-image {
        width: 100%;
        height: 100vh;
        object-fit: cover;
        object-position: center;
    }
</style>
</head>
<body>
    <nav class="flex space-x-4">
        @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="bg-[#FF2D20] text-white py-2 px-4 rounded-md hover:bg-black-600 transition duration-300">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="bg-[#FF2D20] text-white py-2 px-4 rounded-md hover:bg-black-600 transition duration-300">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="bg-[#FF2D20] text-white py-2 px-4 rounded-md hover:bg-black-600 transition duration-300">Sign up</a>
            @endif
        @endauth
        @endif
    </nav>

<figure style="position: relative;">
    <img class="background-image" src="https://www.maketecheasier.com/assets/uploads/2021/03/change-note-background-ios-featured.jpg">
    <figcaption class="container">
                    <h2 class="text-3xl font-bold mb-4">Welcome to Note</h2>
                    <p class="text-lg mb-4">Need to organize your mind and boost productivity?</p>
                    <p class="text-lg mb-4" > Look no further than Note. Create an account now and get started.</p>
                    <a href="{{ route('register') }}" class="bg-[#f33e3e] text-black py-2 px-4 rounded-md hover:bg-red-600 transition duration-300">Get started</a>
    </figcaption>
</figure>
</body>
</html>

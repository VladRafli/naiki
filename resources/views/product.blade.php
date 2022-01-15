<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Primary Meta Tags -->
    <title>Naiki</title>
    <meta name="title" content="Naiki">
    <meta name="description" content="Naiki Shoe Shop">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="localhost:8000">
    <meta property="og:title" content="Naiki">
    <meta property="og:description" content="Naiki Shoe Shop">
    <meta property="og:image" content="images.png">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="localhost">
    <meta property="twitter:title" content="Naiki">
    <meta property="twitter:description" content="Naiki Shoe Shop">
    <meta property="twitter:image" content="images.png">
    <!-- Charset and Viewport -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/nike.svg') }}" type="image/svg">
</head>

<body>
    {{-- Navbar --}}
    <nav class="p-5 flex justify-between items-center border-b-2 border-gray-200">
        <div class="flex justify-center items-center">
            <a href="{{ url('/') }}">
                <img class="h-20 w-20" src="{{ asset('assets/img/nike.svg') }}" alt="">
            </a>
        </div>
        <ul class="flex">
            <li>
                <a class="mx-5 font-bold transition-colors hover:text-gray-500" href="javascript:void(0);">Men</a>
            </li>
            <li>
                <a class="mx-5 font-bold transition-colors hover:text-gray-500" href="javascript:void(0);">Women</a>
            </li>
            <li>
                <a class="mx-5 font-bold transition-colors hover:text-gray-500" href="javascript:void(0);">Kids</a>
            </li>
            <li>
                <a class="mx-5 font-bold transition-colors hover:text-gray-500" href="javascript:void(0);">Customize</a>
            </li>
            <li>
                <a class="mx-5 font-bold transition-colors hover:text-gray-500" href="javascript:void(0);">Favorites</a>
            </li>
        </ul>
        <form>
            <input class="p-3 bg-gray-200 rounded-xl" type="text" name="search" id="search" placeholder="Search">
        </form>
        <div>
            @if ($auth)
            <div class="flex">
                <div class="h-fit w-fit cursor-pointer transition-colors hover:text-gray-500" id="profile_menu_button">
                    <i class="fas fa-user mx-3 text-2xl"></i>
                </div>
                <div class="w-fit px-10 py-5 hidden absolute bg-gray-200 rounded-lg" id="profile_menu"
                    style="transform: translate(-3.5rem, 3rem);">
                    <p class="my-2">User Name</p>
                    <button class="my-2 p-3 transition-colors hover:bg-gray-300 rounded-lg">Logout</button>
                </div>
                <div class="h-fit w-fit cursor-pointer transition-colors hover:text-gray-500">
                    <i class="fas fa-shopping-cart mx-3 text-2xl "></i>
                </div>
            </div>
            @else
                <button class="px-5 py-2 text-lg rounded-lg bg-gray-300 transition-all hover:bg-opacity-50"
                    id="login_button">Login</button>
                <div class="h-full w-full hidden p-3 top-0 left-0 absolute justify-center items-center bg-black bg-opacity-50"
                    id="login_popup">
                    <div class="py-10 px-24 flex flex-col items-center bg-white rounded-lg">
                        <div class="absolute text-3xl cursor-pointer" style="transform: translate(10.5rem, -1.5rem)"
                            id="popup_close">
                            <i class="fas fa-times"></i>
                        </div>
                        <h1 class="text-3xl">Login</h1>
                        <form method="post" class="flex flex-col">
                            <input class="my-3 p-3 bg-gray-200 rounded-lg" type="email" name="email" id="email"
                                placeholder="Email">
                            <input class="my-3 p-3 bg-gray-200 rounded-lg" type="password" name="password" id="password"
                                placeholder="Password">
                            <button class="my-3 p-3 bg-gray-200 rounded-lg transition-colors hover:bg-gray-300"
                                type="submit">Login</button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </nav>
    <main class="m-10 grid grid-cols-2">
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/img/air-zoom-alphafly-next-flyknit-road-racing-shoes-ZgldSQ.jfif') }}" alt="">
        </div>
        <div class="flex flex-col justify-center">
            <div class="mb-5">
                <h1 class="text-2xl">Nike Air Zoom Alphafly Flyknit</h1>
                <p>Men's Shoe</p>
            </div>
            <p class="mb-5">$340</p>
            <button class="px-5 py-2 rounded-lg bg-gray-300 transition-all hover:bg-opacity-50">Add to Bag</button>
        </div>
    </main>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>

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

<body class="font-serif grid grid-rows-1" style="grid-template-columns: 1fr 7fr">
    {{-- Sidebar --}}
    <aside class="h-screen border-r-2 border-gray-200">
        <div class="flex justify-center items-center">
            <a href="{{ url('/') }}">
                <img class="h-20 w-20" src="{{ asset('assets/img/nike.svg') }}" alt="">
            </a>
        </div>
        <div class="p-8">
            <div>
                <h1 class="mb-5 text-2xl font-bold">Sneaker's</h1>
                <ul>
                    <li>
                        <a href="javascript:void(0);" class="mb-3 transition-colors hover:text-gray-500">Lifestyle
                            (0)</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mb-3 transition-colors hover:text-gray-500">Original (0)</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mb-3 transition-colors hover:text-gray-500">Basketball
                            (0)</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mb-3 transition-colors hover:text-gray-500">Football (0)</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mb-3 transition-colors hover:text-gray-500">Soccer (0)</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mb-3 transition-colors hover:text-gray-500">Training
                            (0)</a>
                    </li>
                </ul>
            </div>
            <div>
                <h1>Filter</h1>
                <input type="range" name="filter" id="filter" min="0" max="2000">
            </div>
            <div>
                <h1>Color</h1>
                <div class="grid grid-cols-5 gap-3">
                    <div class="h-6 w-6 bg-red-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-blue-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-green-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-violet-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-rose-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-black rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-gray-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-lime-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-teal-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-indigo-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-purple-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-pink-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-emerald-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-sky-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-fuchsia-500 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                </div>
            </div>
        </div>
    </aside>
    <main>
        {{-- Navbar --}}
        <nav class="p-5 flex justify-between items-center border-b-2 border-gray-200">
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
                    <a class="mx-5 font-bold transition-colors hover:text-gray-500"
                        href="javascript:void(0);">Customize</a>
                </li>
                <li>
                    <a class="mx-5 font-bold transition-colors hover:text-gray-500"
                        href="javascript:void(0);">Favorites</a>
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
                            <div class="absolute text-3xl cursor-pointer" style="transform: translate(10.5rem, -1.5rem);"
                                id="popup_close">
                                <i class="fas fa-times"></i>
                            </div>
                            <h1 class="text-3xl">Login</h1>
                            <form method="post" class="flex flex-col">
                                <input class="my-3 p-3 bg-gray-200 rounded-lg" type="email" name="email" id="email"
                                    placeholder="Email">
                                <input class="my-3 p-3 bg-gray-200 rounded-lg" type="password" name="password"
                                    id="password" placeholder="Password">
                                <button class="my-3 p-3 bg-gray-200 rounded-lg transition-colors hover:bg-gray-300"
                                    type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </nav>
        {{-- Header --}}
        <header class="p-8 flex justify-between items-center border-b-2 border-gray-200">
            <h1 class="text-5xl font-bold">Lifestyle Sneakers</h1>
            <div class="flex">
                <div class="mx-3 flex items-center">
                    <p class="mx-2">Hide Filters</p>
                    <i class="fas fa-sliders-h mx-2"></i>
                </div>
                <div class="mx-3 flex items-center">
                    <p class="mx-2">Sort By</p>
                    <i class="fas fa-chevron-down mx-2"></i>
                </div>
            </div>
        </header>
        {{-- Items --}}
        <main class="p-8 grid grid-cols-3 gap-8">
            {{-- Example Item --}}
            <a href="{{ url('/product/1') }}"
                class="p-5 rounded-xl cursor-pointer transition-colors hover:bg-gray-100">
                <img class="rounded-3xl"
                    src="{{ asset('assets/img/air-zoom-alphafly-next-flyknit-road-racing-shoes-ZgldSQ.jfif') }}"
                    alt="">
                <div class="mt-5 flex justify-between font-bold">
                    <div class="mr-3 flex flex-col justify-between">
                        <p>Nike Air Zoom Alphafly Flyknit</p>
                        <div>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="w-32 ml-3 flex flex-col justify-between">
                        <p>$340</p>
                        <p class="text-gray-500">5 Colours</p>
                    </div>
                </div>
            </a>
            {{-- End of Example Item --}}
        </main>
    </main>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>

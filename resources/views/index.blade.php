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
            <img class="h-20 w-20" src="{{ asset('assets/img/nike.svg') }}" alt="">
        </div>
        <div class="p-8">
            <div>
                <h1 class="mb-5 text-2xl font-bold">Sneaker's</h1>
                <ul>
                    <li><a href="javascript:void(0);" class="mb-3 transition-colors hover:text-gray-500">Lifestyle
                            (0)</a></li>
                    <li><a href="javascript:void(0);" class="mb-3 transition-colors hover:text-gray-500">Original (0)</a>
                    </li>
                    <li><a href="javascript:void(0);" class="mb-3 transition-colors hover:text-gray-500">Basketball
                            (0)</a></li>
                    <li><a href="javascript:void(0);" class="mb-3 transition-colors hover:text-gray-500">Football (0)</a>
                    </li>
                    <li><a href="javascript:void(0);" class="mb-3 transition-colors hover:text-gray-500">Soccer (0)</a>
                    </li>
                    <li><a href="javascript:void(0);" class="mb-3 transition-colors hover:text-gray-500">Training
                            (0)</a></li>
                </ul>
            </div>
            <div>
                <h1>Filter</h1>
                <input type="range" name="filter" id="filter" min="0" max="2000">
            </div>
            <div>
                <h1>Color</h1>
                <div class="grid grid-cols-5 gap-3">
                    <div class="h-6 w-6 bg-red-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-blue-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-green-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-violet-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-rose-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-black rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-gray-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-lime-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-teal-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-indigo-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-purple-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-pink-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-emerald-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-sky-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                    <div class="h-6 w-6 bg-fuchsia-300 rounded-full cursor-pointer hover:bg-opacity-50"></div>
                </div>
            </div>
        </div>
    </aside>
    <main>
        {{-- Navbar --}}
        <nav class="p-5 flex justify-between items-center border-b-2 border-gray-200">
            <ul class="flex">
                <li><a class="mx-5 font-bold transition-colors hover:text-gray-500" href="javascript:void(0);">Men</a>
                </li>
                <li><a class="mx-5 font-bold transition-colors hover:text-gray-500" href="javascript:void(0);">Women</a>
                </li>
                <li><a class="mx-5 font-bold transition-colors hover:text-gray-500" href="javascript:void(0);">Kids</a>
                </li>
                <li><a class="mx-5 font-bold transition-colors hover:text-gray-500"
                        href="javascript:void(0);">Customize</a></li>
                <li><a class="mx-5 font-bold transition-colors hover:text-gray-500"
                        href="javascript:void(0);">Favorites</a></li>
            </ul>
            <form>
                <input class="p-3 bg-gray-200 rounded-xl" type="text" name="search" id="search" placeholder="Search">
            </form>
            <div class="text-2xl">
                <i class="fas fa-user mx-3 cursor-pointer transition-colors hover:text-gray-500"></i>
                <i class="fas fa-briefcase mx-3 cursor-pointer transition-colors hover:text-gray-500"></i>
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
            <div>
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
            </div>
            {{-- End of Example Item --}}
        </main>
    </main>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>

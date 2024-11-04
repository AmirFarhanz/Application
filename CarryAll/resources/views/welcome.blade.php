<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
               .Header {
                bg-slate-50;
               }
            </style>
        @endif
    </head>
    <body>
       <header class="bg-blue-200 h-[70px] flex items-center">
               <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="flex justify-between items-center">
                        <a href="" class="text-2xl font-semibold text-gray-700 hover:text-gray-900">Carry All</a>
                        <nav>
                            <ul class="flex space-x-8">
                                <a href=""><li class="transition-colors hover:text-white">Home</li></a>
                                <a href=""><li class="transition-colors hover:text-white">Products</li></a>
                                <a href=""><li class="transition-colors hover:text-white">Our Story</li></a>
                            </ul>
                        </nav>
                        <div class="flex space-x-8">
                        <img src="\img\109-1092659_search-icon-small-png-clipart-removebg-preview.png" alt=""class="h-8 w-auto">
                            <img src="img\1413908-removebg-preview.png" alt="" class="h-8 w-auto">
                            
                        </div>
                    </div>
                    
               </div>
       </header>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Geozhur</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-inter">
<div class="flex flex-col h-screen">
    <nav id="header" class="w-full z-10 top-0">

        <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">

            <div class="pl-4">
                <a class="text-gray-900 font-extrabold text-base no-underline hover:no-underline font-extrabold text-xl" href="#">
                    Geozhur blog
                </a>
            </div>

            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="#">{{ __("Active") }}</a>
                    </li>
                    <li class="mr-3">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="inline-block py-2 px-1 {{ LaravelLocalization::getCurrentLocale() === $localeCode ? "font-bold underline": "no-underline" }}" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ strtoupper($localeCode) }}
                            </a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Container-->
    <div class="container flex-grow w-full md:max-w-3xl mx-auto pt-5">

        <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">

            <!--Title-->
            <div>
                <h1 class="font-bold break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">Welcome to Geozhur Blog</h1>
                <p class="text-sm md:text-base font-normal text-gray-600">Published February 2022</p>
            </div>


            <!--Post Content-->

            <p class="py-6">My blog is about my own experience, not using information to hurt people.</p>


            <blockquote class="border-l-4 border-green-500 italic my-8 pl-8 md:pl-12">The project is still a work in progress, but it is nearing completion.</blockquote>


            <!--/ Post Content-->

        </div>


    </div>

    <footer class="bg-white">
        <div class="container max-w-4xl mx-auto flex py-8">

            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full md:w-1/2 ">
                    <div class="px-8">
                        <h3 class="font-bold text-gray-900">About</h3>
                        <p class="py-4 text-gray-600 text-sm">
                            I'm ready
                        </p>
                    </div>
                </div>

                <div class="flex w-full md:w-1/2">
                    <div class="px-8">

                    </div>
                </div>
            </div>



        </div>
    </footer>

</div>
</body>
</html>

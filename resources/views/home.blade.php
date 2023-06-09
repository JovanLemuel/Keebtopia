@extends('layouts.mainLayout')
@section('Keebtopia', 'Home')

@section('content')

<!-- Carousel -->
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:h-[500px]">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/home-carousel/carousel-1.svg" alt="Home Carousel 1"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/home-carousel/carousel-2.svg" alt="Home Carousel 2"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/home-carousel/carousel-3.svg" alt="Home Carousel 3"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/home-carousel/carousel-4.svg" alt="Home Carousel 4"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/home-carousel/carousel-5.svg" alt="Home Carousel 5"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
            data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<!-- Description Text -->
<div class="container mx-auto py-16">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-2xl font-extrabold mb-4 font-poppins">Welcome to Keebtopia</h2>
        <p class="text-lg text-justify text-gray-600 font-normal font-poppins"> We are the perfect place to fulfill your custom keyboard commission needs. We prioritize quality and customer satisfaction in every step of the keyboard customization process.</p>
    </div>
</div>

<!-- Product tab -->
<div class="bg-beige3 md:p-10">
    <!-- Row 1 -->
    <div class="max-w-2xl mx-auto py-4 px-4 sm:py-24 sm:px-6 lg:max-w-7xl md:p-0 lg:px-8">
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-bold text-gray-900">Latest Products</h2>
            <div class="">
                <a href="/catalog"
                    class="text-base text-gray-700 hover:text-gray-900 font-poppins md:text-base md:font-normal"> See
                    More > </a>
            </div>
        </div>
        {{-- button --}}
        <div
            class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-3 xl:grid-cols-4 md:gap-y-0 lg:gap-x-8">

            <!-- Product Card 1 -->

            <div class="group relative">
                <div class="w-full h-56 bg-gray-200 rounded-md overflow-hidden  lg:h-72 xl:h-80">
                    <img src="{{ asset('images/catalog/ws-quartz.svg') }}" alt="WS Quartz"
                        class="w-full h-full object-center object-cover transition duration-300 image-default group-hover:scale-110">
                </div>
                <h3 class="mt-4 text-sm font-semibold font-poppins text-slate-950 md:text-base">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        WS Quartz
                    </a>
                </h3>
                <p class="mt-1 font-poppins text-sm text-slate-800 md:text-sm">Switch</p>
                <p class="mt-1 font-poppins font-medium text-sm text-slate-900 md:text-lg">Rp 6.300</p>
            </div>
            <!-- Product Card 2 -->
            <div class="group relative">
                <div class="w-full h-56 bg-gray-200 rounded-md overflow-hidden  lg:h-72 xl:h-80">
                    <img src="{{ asset('images/catalog/ws-silent-linear.svg') }}" alt="WS Silent Linear"
                        class="w-full h-full object-center object-cover transition duration-300 image-default group-hover:scale-110">
                </div>
                <h3 class="mt-4 text-sm font-semibold font-poppins text-slate-950 md:text-base">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        WS Silent Linear
                    </a>
                </h3>
                <p class="mt-1 font-poppins text-sm text-slate-800 md:text-sm">Switch</p>
                <p class="mt-1 font-poppins font-medium text-sm text-slate-900 md:text-lg">Rp 6.300</p>
            </div>



            <!-- Product Card 3 -->
            <div class="group relative">
                <div class="w-full h-56 bg-gray-200 rounded-md overflow-hidden  lg:h-72 xl:h-80">
                    <img src="{{ asset('images/catalog/ws-silent-tactile.svg') }}" alt="WS Silent Tactile"
                        class="w-full h-full object-center object-cover transition duration-300 image-default group-hover:scale-110">
                </div>
                <h3 class="mt-4 text-sm font-semibold font-poppins text-slate-950 md:text-base">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        WS Silent Tactile
                    </a>
                </h3>
                <p class="mt-1 font-poppins text-sm text-slate-800 md:text-sm">Switch</p>
                <p class="mt-1 font-poppins font-medium text-sm text-slate-900 md:text-lg">Rp 6.300</p>
            </div>

            <!-- Product Card 4 -->
            <div class="group relative">
                <div class="w-full h-56 bg-gray-200 rounded-md overflow-hidden  lg:h-72 xl:h-80">
                    <img src="{{ asset('images/catalog/ws-heavy-tactile.svg') }}" alt="WS Heavy Tactile"
                        class="w-full h-full object-center object-cover transition duration-300 image-default group-hover:scale-110">
                </div>
                <h3 class="mt-4 text-sm font-semibold font-poppins text-slate-950 md:text-base">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        WS Heavy Tactile
                    </a>
                </h3>
                <p class="mt-1 font-poppins text-sm text-slate-800 md:text-sm">Switch</p>
                <p class="mt-1 font-poppins font-medium text-sm text-slate-900 md:text-lg">Rp 5.200</p>
            </div>




        </div>
    </div>
</div>

<!-- Portofolio section-->
<div>
    <!-- Row 1 -->
    <div class="max-w-2xl mx-auto pb-4 px-4 sm:py-24 sm:px-6 lg:max-w-7xl md:p-0 lg:px-8">
        <div class="pt-10 pb-10 text-center ">
            <h2 class="text-2xl font-bold text-gray-900 ">Our Portfolio</h2>
            <p>See a list of some of our previous works.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('images/portfolio/portfolio-0.svg') }}" alt="Portfolio Image 0">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('images/portfolio/portfolio-1.svg') }}" alt="Portfolio Image 1">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('images/portfolio/portfolio-2.svg') }}" alt="Portfolio Image 2">
                </div>
            </div>
            <div class="grid gap-4">
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('images/portfolio/portfolio-3.svg') }}" alt="Portfolio Image 3">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('images/portfolio/portfolio-4.svg') }}" alt="Portfolio Image 4">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('images/portfolio/portfolio-5.svg') }}" alt="Portfolio Image 5">
                </div>
            </div>
            <div class="grid gap-4">
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('images/portfolio/portfolio-6.svg') }}" alt="Portfolio Image 6">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('images/portfolio/portfolio-7.svg') }}" alt="Portfolio Image 7">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('images/portfolio/portfolio-8.svg') }}" alt="Portfolio Image 8">
                </div>
            </div>
            <div class="grid gap-4">
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('images/portfolio/portfolio-9.svg') }}" alt="Portfolio Image 9">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('images/portfolio/portfolio-10.svg') }}" alt="Portfolio Image 10">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('images/portfolio/portfolio-11.svg') }}" alt="Portfolio Image 11">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

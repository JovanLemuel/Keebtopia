@extends('layouts.mainLayout')
@section('Keebtopia', 'Home')

@section('content')

<!-- Carousel -->
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:h-[500px]">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/home-carousel/home-carousel-1.jpg" alt="Home Carousel 1"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/home-carousel/home-carousel-2.jpg" alt="Home Carousel 2"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/home-carousel/home-carousel-3.jpg" alt="Home Carousel 3"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/home-carousel/home-carousel-4.jpg" alt="Home Carousel 4"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/home-carousel/home-carousel-5.jpg" alt="Home Carousel 5"
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
        <h2 class="text-3xl font-bold mb-4 font-poppins">Welcome to Our Website</h2>
        <p class="text-lg text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper, mi
            non congue malesuada, felis ipsum pulvinar mauris, vitae tristique lectus elit a nulla. Nulla facilisi.
            Suspendisse potenti.</p>
    </div>
</div>

<!-- Product tab -->
<div class="bg-beige3 md:p-10">
    <!-- Row 1 -->
    <div class="max-w-2xl mx-auto py-4 px-4 sm:py-24 sm:px-6 lg:max-w-7xl md:p-0 lg:px-8">
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-bold text-gray-900">Latest Products</h2>
            <div class="">
                <a href="/catalog" class="text-base text-gray-700 hover:text-gray-900"> See More > </a>
            </div>
        </div>
        {{-- button --}}
        <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-3 xl:grid-cols-4 md:gap-y-0 lg:gap-x-8">

            <!-- Product Card 1 -->
            <div class="group relative">
                <div class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                    <img src="images/home-carousel/home-carousel-1.jpg" alt="Product Image"
                        class="w-full h-full object-center object-cover">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        Mechanical Keyboard
                    </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Keyboard</p>
                <p class="mt-1 text-sm font-medium text-gray-900">Rp.1.999.000</p>
            </div>

            <!-- Product Card 2 -->
            <div class="group relative">
                <div class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                    <img src="images/home-carousel/home-carousel-1.jpg" alt="Product Image"
                        class="w-full h-full object-center object-cover">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        Mechanical Keyboard
                    </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Keyboard</p>
                <p class="mt-1 text-sm font-medium text-gray-900">Rp.1.999.000</p>
            </div>

            <!-- Product Card 3 -->
            <div class="group relative">
                <div class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                    <img src="images/home-carousel/home-carousel-1.jpg" alt="Product Image"
                        class="w-full h-full object-center object-cover">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        Mechanical Keyboard
                    </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Keyboard</p>
                <p class="mt-1 text-sm font-medium text-gray-900">Rp.1.999.000</p>
            </div>

            <!-- Product Card 4 -->
            <div class="group relative">
                <div class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                    <img src="images/home-carousel/home-carousel-1.jpg" alt="Product Image"
                        class="w-full h-full object-center object-cover">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        Mechanical Keyboard
                    </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Keyboard</p>
                <p class="mt-1 text-sm font-medium text-gray-900">Rp.1.999.000</p>
            </div>
        </div>
    </div>
</div>

<!-- Portofolio section-->
<div>
    <!-- Row 1 -->
    <div class="max-w-2xl mx-auto py-4 px-4 sm:py-24 sm:px-6 lg:max-w-7xl md:p-0 lg:px-8">
        <div class="pt-10 pb-10 text-center ">
            <h2 class="text-2xl font-bold text-gray-900 ">Our Portfolio</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, repellendus.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                </div>
                <div class=" hover:scale-105 duration-1000">
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

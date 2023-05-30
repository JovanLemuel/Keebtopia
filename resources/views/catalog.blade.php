@extends('layouts.mainLayout')
@section('Keebtopia', 'catalog')

@section('content')
<div class="container">
    <div class="flex justify-center pt-5 pb-5 md:pt-10 md:pb-10">
        {{-- SEARCH BAR --}}
        <form class="">
            <div class="flex">
                <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
                    Email</label>
                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                    type="button">All categories <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg></button>
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keyboard</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keycaps</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Switch</button>
                        </li>
                    </ul>
                </div>
                {{-- mobile search --}}
                <div class="relative w-full md:hidden">
                    <input type="search " id="search-dropdown"
                        class="block p-2.5 w-full md:w-96 z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                        placeholder="Search Keyboard..." required>
                    <button type="submit"
                        class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-black rounded-r-lg border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>

                 {{-- dekstop search --}}
                 <div class="relative w-full hidden md:block">
                    <input type="search " id="search-dropdown"
                        class="block p-2.5 w-full md:w-96 z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                        placeholder="Search Keyboard, Keycaps, Switch ..." required>
                    <button type="submit"
                        class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-black rounded-r-lg border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>

            </div>
        </form>


    </div>
    {{-- CARD --}}
    <div class="bg-beige2">
        <div class="max-w-2xl mx-auto py-4 px-4 sm:py-24 sm:px-6 lg:max-w-7xl md:p-0 lg:px-8">
            <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
                <div class="group relative">
                    <div
                        class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="images/home-carousel/home-carousel-1.jpg"
                            alt="Hand stitched, orange leather long wallet."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">
                        <a href="/detail">
                            <span class="absolute inset-0"></span>
                            Mechanical Keyboard
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Keyboard</p>
                    <p class="mt-1 text-sm font-medium text-gray-900">Rp.1.999.000</p>
                </div>
                <div class="group relative">
                    <div
                        class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="images/home-carousel/home-carousel-1.jpg"
                            alt="Hand stitched, orange leather long wallet."
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
                <div class="group relative">
                    <div
                        class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="images/home-carousel/home-carousel-1.jpg"
                            alt="Hand stitched, orange leather long wallet."
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
                <div class="group relative">
                    <div
                        class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="images/home-carousel/home-carousel-1.jpg"
                            alt="Hand stitched, orange leather long wallet."
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



                <!-- More products... -->
            </div>


        </div>
    </div>

    <div class="bg-beige2">
        <div class="max-w-2xl mx-auto py-4 px-4 sm:py-24 sm:px-6 lg:max-w-7xl md:p-0 lg:px-8">
            <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
                <div class="group relative">
                    <div
                        class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="images/home-carousel/home-carousel-1.jpg"
                            alt="Hand stitched, orange leather long wallet."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">
                        <a href="/detail">
                            <span class="absolute inset-0"></span>
                            Mechanical Keyboard
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Keyboard</p>
                    <p class="mt-1 text-sm font-medium text-gray-900">Rp.1.999.000</p>
                </div>
                <div class="group relative">
                    <div
                        class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="images/home-carousel/home-carousel-1.jpg"
                            alt="Hand stitched, orange leather long wallet."
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
                <div class="group relative">
                    <div
                        class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="images/home-carousel/home-carousel-1.jpg"
                            alt="Hand stitched, orange leather long wallet."
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
                <div class="group relative">
                    <div
                        class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="images/home-carousel/home-carousel-1.jpg"
                            alt="Hand stitched, orange leather long wallet."
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



                <!-- More products... -->
            </div>


        </div>
    </div>



</div>



@endsection

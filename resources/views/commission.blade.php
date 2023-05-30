@extends('layouts.mainLayout')
@section('Keebtopia', 'Commission')

@section('content')
    <div class="text-center py-12 px-6">
        <h1 class="font-display font-bold text-5xl mb-6">Commission</h1>
    </div>

    <div class="container mx-auto px-6 mb-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-4xl mx-auto">
            <div>
                <div class="my-4">
                    <p class="text-lg font-semibold">What we offer</p>
                </div>

                <p>1. Solder & desolder services<br>
                    2. Keyboard assembly<br>
                    3. Keyboard modifications <i>(tempest mod, foam mod, etc)</i><br>
                    4. Switch modifications <i>(lubing, film, force break)</i><br>
                    5. Stabilizer modifications <i>(lubing, tuning, holee mod)</i><br>
                </p>
            </div>

            <div>
                <div class="my-4">
                    <p class="text-lg font-semibold">Pricing</p>
                </div>

                <p>Our pricing is not fixed and will change according to what the work entails. For more information on our pricing and to get a quote, please contact us.
                </p>
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

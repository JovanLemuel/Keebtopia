@extends('layouts.mainLayout')
@section('Keebtopia', 'Detail')

@section('content')
<div class="container">
    <div class="flex flex-wrap">
        <div class="md:w-1/2 ">
            <img class="rounded-md" src="images/home-carousel/home-carousel-1.jpg" alt="" srcset="">
        </div>
        <div class="md:w-1/2 mt-3 md:px-3">
            <h1 class="text-justify font-medium tracking-tight text-gray-900 text-lg md:font-bold md:text-[18px]">MYNK65 Mechanical Keyboard
                Wireless 65% Gasket Mount - Full Set</h1>
            <p class="text-normal font-bold tracking-tight text-gray-900 mt-2 text-md  md:font-bold md:text-[28px]">Rp 2.500.000</p>
            <p class="mt-2 text-justify text-base md:w-2/3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis,
                alias.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis,
                alias.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis,
                alias.</p>
            <div class="flex mt-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add to Cart
                </button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-4">
                    Buy Now
                </button>
            </div>

        </div>
    </div>
</div>

@endsection

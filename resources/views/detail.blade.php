@extends('layouts.mainLayout')
@section('Keebtopia', 'Detail')

@section('content')
<div class="container">
    <div class="flex flex-wrap mx-auto justify-center items-center m-10">
        <div class="md:w-1/2">
            <img class="rounded-md md:w-[412.5px] md:h-[462px] mx-auto" src="{{ asset('images/catalog-detail/ws-quartz.svg') }}" alt="" srcset="">
        </div>
        <div class="md:w-1/2 mt-3 md:px-3 font-poppins">
            <h1 class="text-justify font-medium tracking-tight text-gray-900 text-lg md:font-bold md:text-[18px]">MYNK65
                Mechanical Keyboard
                Wireless 65% Gasket Mount - Full Set</h1>
            <p class="text-normal font-bold tracking-tight text-gray-900 mt-2 text-md  md:font-bold md:text-[28px]">Rp
                2.500.000</p>
            <p class="mt-2 text-justify text-base ">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Reiciendis,
                alias.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis,
                alias.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis,
                alias.</p>
            <div class="flex mt-4 gap-5">
                <button type="submit"
                    class="inline-block bg-black hover:bg-gray-700 text-white uppercase text-sm tracking-widest font-heading px-8 py-4 mt-6">
                    Buy Now
                </button>
                <button type="submit"
                    class="inline-block bg-black hover:bg-gray-700 text-white uppercase text-sm tracking-widest font-heading px-8 py-4 mt-6">
                    Add To Cart
                </button>
            </div>

        </div>
    </div>
</div>

@endsection

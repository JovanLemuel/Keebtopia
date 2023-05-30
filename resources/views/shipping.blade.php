@extends('layouts.mainLayout')
@section('Keebtopia', 'Shipping')

@section('content')
<div class="container">
    <div class="text-center">
        <h1 class="text-2xl font-bold mb-4 mt-12">Shipping</h1>
        <h2 class="mb-4">Powered by <a class="font-semibold hover-underline-animation-normal" href="https://rajaongkir.com/" target="_blank">RajaOngkir API</a></h2>
        <p class="text-base text-gray-700 mb-6">Check shipping cost and estimated delivery time for your package.</p>
    </div>

    <!-- Formulir untuk memeriksa ongkos kirim -->

    <div class="mt-6">
        <!-- Tombol "Check Shipping Cost" -->
        <form action="" method="POST">
            @csrf
            <div class="md:w-1/2 mx-auto">
                {{-- asal kota --}}
                <div class="mt-5">
                    <label for="origin" class="block text-sm font-medium text-gray-700">Origin City</label>
                    <select id="origin" name="origin"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 text-gray-700 focus:outline-none focus:ring-beige3 focus:border-beige3 sm:text-sm" required>
                        <option value="">Pick city of origin</option>
                        @foreach ($cities as $item)
                        <option value="{{ $item['city_id'] }}">{{ $item['city_name'] }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- tujuan kota --}}
                <div class="mt-5">
                    <label for="destination" class="block text-sm font-medium text-gray-700">Destination City</label>
                    <select id="destination" name="destination"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 text-gray-700 focus:outline-none focus:ring-beige3 focus:border-beige3 sm:text-sm" required>
                        <option value="">Pick destination city</option>
                        @foreach ($cities as $item)
                        <option value="{{ $item['city_id'] }}">{{ $item['city_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- berat --}}
                <div class="mt-5">
                    <label for="weight" class="block text-sm font-medium text-gray-700">Package Weight (grams)</label>
                    <div class="mt-1">
                        <input type="text" name="weight" id="weight"
                            class="shadow-sm focus:ring-beige3 focus:border-beige3 block w-full sm:text-sm border-gray-300"
                            placeholder="100" required>
                    </div>
                </div>

                {{-- Kurir --}}
                <div class="mt-5">
                    <label for="courier" class="block text-sm font-medium text-gray-700">Delivery Service</label>
                    <select id="courier" name="courier"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 text-gray-700 focus:outline-none focus:ring-beige3 focus:border-beige3 sm:text-sm" required>
                        <option value="">Pick delivery service</option>
                        <option value="jne">JNE</option>
                        <option value="pos">POS</option>
                        <option value="tiki">TIKI</option>
                    </select>
                </div>

                {{-- button --}}
                <div class="mt-12 text-center">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-700">Check
                        Shipping Cost</button>
                </div>
            </div>
        </form>
    </div>

    {{-- Cost Result --}}
    <div class="mt-5 md:w-1/2 mx-auto">
        @if ($ongkir != null)
        <h1 class="text-xl font-bold text-center">Rincian Ongkos Kirim</h1>

        <div class="mt-3">
            <p>Asal Tujuan : {{ $ongkir['origin_details']['city_name']}}</p>
            <p>Kota Tujuan : {{ $ongkir['destination_details']['city_name']}}</p>
            <p>Berat Paket : {{ $data->weight}} Gram</p>
        </div>
        @foreach ($ongkir['results'] as $item)
        <div class="mt-3">
            <p>Nama Kurir : {{ $item['name'] }}</p>
        </div>

        <div class="mt-3">
            @foreach ($item['costs'] as $data)
            <p>Service : {{ $data['service'] }} (estimasi {{ $data['cost'][0]['etd'] }})</p>
            <p>Harga : {{ $data['cost'][0]['value'] }}</p>
            @endforeach
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection

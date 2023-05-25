@extends('layouts/mainlayout')
@section('Keebtopia', 'Contact')

@section('content')
    <div class="text-center py-12 px-6">
        <h1 class="font-display font-bold text-5xl mb-6">Contact Us</h1>
    </div>

    <div class="container mx-auto px-6 mb-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-4xl mx-auto">

            <div>
                <a href="tel:812 1601 6905" class="flex items-center my-2">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                    </svg>
                    +62 812-1601-6905
                </a>
                <a href="mailto:keebtopia@gmail.com" class="flex items-center my-2">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    keebtopia@gmail.com
                </a>
                <div class="flex items-center my-2">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    monday-friday, 9-5
                </div>
                <a href="https://goo.gl/maps/dH1jgFj3uPgjZLhK8" target="_blank" class="flex items-center my-2">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Universitas Ciputra, Surabaya, Indonesia
                </a>

            </div>

            <div>
                <form action="{{ route('contacts.store') }}" method="POST" name="contact" netlify>
                    @csrf
                    <div>
                        <label for="" class="block text-base tracking-tight text-gray-600">Name</label>
                        <input name="contact_name" type="text" placeholder="Name" required
                            class="mt-2 w-full border-none text-sm p-4 bg-gray-100 text-gray-700" />
                    </div>
                    <div class="mt-6">
                        <label for="" class="block text-base tracking-tight text-gray-600">Email Address</label>
                        <input name="contact_email" type="email" placeholder="Email" required
                            class="mt-2 w-full border-none text-sm p-4 bg-gray-100 text-gray-700" />
                    </div>
                    <div class="mt-6">
                        <label for="" class="block text-base tracking-tight text-gray-600">Message Title</label>
                        <textarea name="contact_title" placeholder="Your message title" required
                            class="mt-2 w-full border-none text-sm p-4 bg-gray-100 text-gray-700"></textarea>
                    </div>
                    <div class="mt-6">
                        <label for="" class="block text-base tracking-tight text-gray-600">Message</label>
                        <textarea name="contact_message" placeholder="Your message" required
                            class="mt-2 w-full border-none text-sm p-4 bg-gray-100 text-gray-700"></textarea>
                    </div>
                    <button type="submit"
                        class="inline-block bg-black hover:bg-amber-700 text-white uppercase text-sm tracking-widest font-heading px-8 py-4 mt-6">
                        Send message
                    </button>
                </form>
            </div>
        </div>
        <div class="mt-12 gap-12 max-w-4xl mx-auto">
            @include('components/flash-message')
        </div>
    </div>

@endsection


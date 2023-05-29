<nav class="bg-beige border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="flex flex-col justify-center text-center">
            <a href="/home">
                <img src="images/logo-black.svg" class="h-8" alt="KeebTopia Logo" />
                <p class="self-center font-semibold whitespace-nowrap dark:text-white text-sm">KeebTopia</p>
            </a>
        </div>
        <div class="flex md:order-2">
            <a href="/" class="inline-block">
                <img src="images/cart-black-1.svg" class="h-8" alt="Cart Button" />
            </a>
            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-beige md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-beige dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/home" class="block py-2 pl-3 pr-4 rounded md:p-0 md:dark:text-blue-500 dark:text-white dark:hover:bg-gray-700 hover-underline-animation dark:hover:text-white {{ request()->is('home*') ? 'bg-gray-700 text-white md:bg-transparent md:text-gray-900' : 'text-gray-900' }}">Home</a>
                </li>
                <li>
                    <a href="/catalog"
                        class="block py-2 pl-3 pr-4 rounded md:p-0 md:dark:text-blue-500 hover-underline-animation dark:text-white dark:hover:bg-gray-700 dark:hover:text-white {{ request()->is('catalog*') ? 'bg-gray-700 text-white md:bg-transparent md:text-gray-900' : 'text-gray-900' }}">Catalog</a>
                </li>
                <li>
                    <a href="/commission"
                        class="block py-2 pl-3 pr-4 rounded md:p-0 md:dark:text-blue-500 hover-underline-animation dark:text-white dark:hover:bg-gray-700 dark:hover:text-white {{ request()->is('commission*') ? 'bg-gray-700 text-white md:bg-transparent md:text-gray-900' : 'text-gray-900'}}">Commission</a>
                </li>
                <li>
                    <a href="/contact" class="block py-2 pl-3 pr-4 rounded md:p-0 md:dark:text-blue-500 dark:text-white dark:hover:bg-gray-700 hover-underline-animation dark:hover:text-white {{ request()->is('contact*') ? 'bg-gray-700 text-white md:bg-transparent md:text-gray-900' : 'text-gray-900' }}">Contact</a>
                </li>

                <li>
                    <a href="/shipping"
                        class="block py-2 pl-3 pr-4 rounded md:p-0 md:dark:text-blue-500 hover-underline-animation dark:text-white dark:hover:bg-gray-700 dark:hover:text-white {{ request()->is('shipping*') ? 'bg-gray-700 text-white md:bg-transparent md:text-gray-900' : 'text-gray-900'}}">Shipping</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

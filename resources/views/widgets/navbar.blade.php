{{-- <header class="py-4 bg-black bg-opacity-80 sm:py-6 fixed top-0 w-full z-10" x-data="{ expanded: false }">
    <div class="px-6 mx-auto sm:px-8 lg:px-12 max-w-7xl">
        <div class="flex items-center justify-between">
            <div class="flex flex-shrink-0">
                <a href="/" title="BakerStreet"
                    class="inline-flex rounded-md focus:outline-none focus:ring-2 focus:ring-offset-4 focus:ring-offset-secondary focus:ring-primary">
                    <img class="w-auto h-8" src="{{ asset('assets/images/logos/Logo For Dark Background.png') }}"
                        alt="BakerStreet" />
                </a>
            </div>

            <div class="md:hidden">
                <button type="button"
                    class="p-2 -m-2 transition-all duration-200 rounded-full text-white focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-primary focus:ring-offset-secondary">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <div class="hidden md:flex md:items-center md:space-x-10 lg:ml-28">
                <a href="/" title=""
                    class="font-sans text-base font-normal transition-all duration-200 rounded text-white focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-primary focus:ring-offset-secondary">
                    Home </a>

                <a href="/pages/about" title=""
                    class="font-sans text-base font-normal transition-all duration-200 rounded text-white focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-primary focus:ring-offset-secondary">
                    About </a>

                <div class="relative group">
                    <a href="#" title=""
                        class="font-sans text-base font-normal transition-all duration-200 rounded text-white focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-primary focus:ring-offset-secondary">
                        Services </a>
                    <!-- Dropdown menu -->
                    <div
                        class="absolute left-0 w-40 mt-1 origin-top-left bg-white divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option
                                1</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option
                                2</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option
                                3</a>
                        </div>
                    </div>
                </div>
                <a href="/pages/contact" title=""
                    class="font-sans text-base font-normal transition-all duration-200 rounded text-white focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-primary focus:ring-offset-secondary">
                    Contact </a>
            </div>

            <div class="hidden md:block">
                <button type="button"
                    class="p-2 -m-2 transition-all duration-200 rounded-full focus:ring-offset-secondary text-white focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-primary">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.4999 13.9999H14.7099L14.4299 13.7299C15.6299 12.3299 16.2499 10.4199 15.9099 8.38989C15.4399 5.60989 13.1199 3.38989 10.3199 3.04989C6.08989 2.52989 2.52989 6.08989 3.04989 10.3199C3.38989 13.1199 5.60989 15.4399 8.38989 15.9099C10.4199 16.2499 12.3299 15.6299 13.7299 14.4299L13.9999 14.7099V15.4999L18.2499 19.7499C18.6599 20.1599 19.3299 20.1599 19.7399 19.7499C20.1499 19.3399 20.1499 18.6699 19.7399 18.2599L15.4999 13.9999ZM9.49989 13.9999C7.00989 13.9999 4.99989 11.9899 4.99989 9.49989C4.99989 7.00989 7.00989 4.99989 9.49989 4.99989C11.9899 4.99989 13.9999 7.00989 13.9999 9.49989C13.9999 11.9899 11.9899 13.9999 9.49989 13.9999Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header> --}}


<nav class="py-4 bg-black bg-opacity-80 sm:py-6 fixed top-0 w-full z-10" x-data="{ expanded: false }">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/images/logos/Logo For Dark Background.png') }}" class="h-8" alt="Flowbite Logo" />

        </a>
        <button data-collapse-toggle="mega-menu-full" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mega-menu-full" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div id="mega-menu-full"
            class="items-center justify-between font-medium hidden w-full md:flex md:w-auto md:order-1">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-black md:bg-transparent dark:bg-black dark:bg-transparent md:dark:bg-black md:dark:bg-transparent dark:border-black">
                <li>
                    <a href="/"
                        class=" font-sans text-base font-normal py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 dark:text-white md:dark:hover:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-gray-500 md:dark:hover:bg-transparent dark:border-gray-700"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <button id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-600 md:p-0 dark:text-white md:dark:hover:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-gray-500 md:dark:hover:bg-transparent dark:border-gray-700">Services
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                </li>
                <li>
                    <a href="/pages/about"
                        class=" font-sans text-base font-normal py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 dark:text-white md:dark:hover:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-gray-500 md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="/pages/contact"
                        class=" font-sans text-base font-normal py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 dark:text-white md:dark:hover:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-gray-500 md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>

            </ul>
        </div>
    </div>
    <div id="mega-menu-full-dropdown"
        class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-zinc-950 dark:border-gray-600 hidden">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
            <ul>
                <li>
                    <a href="/pages/services-one" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-100 hover:text-black">
                        <div class="font-semibold">People and Organisational Performance:</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="/pages/services-two" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-100 hover:text-black">
                        <div class="font-semibold">Executive Search &amp; Recruitment</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="/pages/services-three" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-100 hover:text-black">
                        <div class="font-semibold">Reward Management</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="/pages/services-four" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-100 hover:text-black">
                        <div class="font-semibold">Organizational Development and Culture Transformation</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">Segmentation</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">Marketing CRM</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Toggle the mega menu
        const menuButton = document.querySelector('[data-collapse-toggle="mega-menu-full"]');
        const menu = document.getElementById('mega-menu-full');

        menuButton.addEventListener('click', function () {
            menu.classList.toggle('hidden');
        });

        // Toggle the dropdown within the mega menu
        const dropdownButton = document.getElementById('mega-menu-full-dropdown-button');
        const dropdown = document.getElementById('mega-menu-full-dropdown');

        dropdownButton.addEventListener('click', function () {
            dropdown.classList.toggle('hidden');
        });
    });
</script>




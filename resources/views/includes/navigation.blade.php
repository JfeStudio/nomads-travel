<header class="mx-auto lg:container">
    <div class="navigation m-auto w-full">
        <nav class="relative flex items-center justify-between px-4 py-4 lg:bg-white">
            <a class="text-3xl font-bold leading-none" href="{{ route('home') }}">
                <img src="{{ asset('frontend') }}/assets/images/logo.png" class="w-24 drop-shadow-xl" alt="logo" />
            </a>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center p-3 text-blue-400">
                    <svg class="block h-5 w-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul
                class="absolute text-center top-1/2 left-1/2 hidden -translate-y-1/2 -translate-x-1/2 transform lg:mx-auto lg:flex lg:w-auto lg:items-center lg:space-x-3">
                <li>
                    <a class="text-sm font-semibold text-blue-600" href="#">Home</a>
                </li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="current-fill h-4 w-4" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li>
                    <a class="text-sm text-gray-400 hover:text-gray-500" href="#">Paket Travel</a>
                </li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="current-fill h-4 w-4" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li>
                    <a class="text-sm text-gray-400 hover:text-gray-500" href="#">Services</a>
                </li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="current-fill h-4 w-4" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li>
                    <a class="text-sm text-gray-400 hover:text-gray-500" href="#">Testimonial</a>
                </li>
            </ul>
            @auth
                <div class="lg:flex justify-center hidden">
                    <div>
                        <div class="relative" data-te-dropdown-ref>
                            <button
                                class="flex items-center whitespace-nowrap rounded pt-2.5 pb-2 px-3 text-xs font-medium uppercase leading-normal text-gray-800 transition duration-150 ease-in-out motion-reduce:transition-none"
                                type="button" id="dropdownMenuButton1" data-te-dropdown-toggle-ref aria-expanded="false"
                                data-te-ripple-init data-te-ripple-color="light">
                                {{ Auth::user()->name }}
                                <span class="ml-2 w-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="h-5 w-5">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg  [&[data-te-dropdown-show]]:block"
                                aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                                <li>
                                    <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                        href="#" data-te-dropdown-item-ref>Profile</a>
                                </li>
                                <li>
                                    <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                        href="#" data-te-dropdown-item-ref>Setting</a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                            data-te-dropdown-item-ref>Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @else
                <!-- sign in desktop -->
                <a class="text-sm hidden text-center rounded-md bg-blue-500 py-2.5 px-5 font-semibold text-white transition duration-200 hover:bg-blue-600 lg:inline-block"
                    href="{{ route('login') }}">Sign in</a>
            @endauth
        </nav>
        <div class="navbar-menu relative z-50 hidden">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav class="fixed top-0 left-0 bottom-0 flex w-5/6 max-w-sm flex-col overflow-y-auto bg-white py-6 px-6">
                <div class="mb-8 flex items-center">
                    <a class="mr-auto text-3xl font-bold leading-none" href="{{ route('home') }}">
                        <img src="{{ asset('frontend') }}/assets/images/logo.png" class="w-24 drop-shadow-xl"
                            alt="logo" />
                    </a>
                    <button class="navbar-close">
                        <svg class="h-6 w-6 cursor-pointer text-gray-400 hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        <li class="mb-1">
                            <a class="block rounded bg-blue-50 p-4 text-sm font-semibold text-blue-600"
                                href="#">Home</a>
                        </li>
                        <li class="mb-1">
                            <a class="block rounded p-4 text-sm font-normal text-gray-400 hover:bg-blue-50 hover:text-blue-600"
                                href="#">Paket Travel</a>
                        </li>
                        <li class="mb-1">
                            <a class="block rounded p-4 text-sm font-normal text-gray-400 hover:bg-blue-50 hover:text-blue-600"
                                href="#">Services</a>
                        </li>
                        <li class="mb-1">
                            <a class="block rounded p-4 text-sm font-normal text-gray-400 hover:bg-blue-50 hover:text-blue-600"
                                href="#">Testimonial</a>
                        </li>
                    </ul>
                </div>
                <div class="mt-auto">
                    <div class="pt-6">
                        @auth
                            <div class="flex justify-center lg:hidden">
                                <div>
                                    <div class="relative" data-te-dropdown-ref>
                                        <button
                                            class="flex items-center whitespace-nowrap rounded pt-2.5 pb-2 px-3 text-xs font-medium uppercase leading-normal text-gray-800 transition duration-150 ease-in-out motion-reduce:transition-none"
                                            type="button" id="dropdownMenuButton1" data-te-dropdown-toggle-ref
                                            aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                                            {{ Auth::user()->name }}
                                            <span class="ml-2 w-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="h-5 w-5">
                                                    <path fill-rule="evenodd"
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg  [&[data-te-dropdown-show]]:block"
                                            aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                                            <li>
                                                <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                                    href="#" data-te-dropdown-item-ref>Profile</a>
                                            </li>
                                            <li>
                                                <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                                    href="#" data-te-dropdown-item-ref>Setting</a>
                                            </li>
                                            <li>
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                                        data-te-dropdown-item-ref>Logout</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @else
                            <!-- sign in desktop -->
                            <a class="text-sm flex justify-center text-center rounded-md bg-blue-500 py-2.5 px-5 font-semibold text-white transition duration-200 hover:bg-blue-600 lg:inline-block"
                                href="{{ route('login') }}">Sign in</a>
                        @endauth
                    </div>
                    <p class="my-4 text-center text-xs text-gray-400">
                        <span>Copyright ©
                            <a class="font-semibold text-gray-900" target="_blank"
                                href="https://github.com/JfeStudio">Maman Ganteng</a>
                            😎 2023</span>
                    </p>
                </div>
            </nav>
        </div>
    </div>
</header>

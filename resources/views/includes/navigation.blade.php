<nav class="bg-white fixed max-sm:w-full lg:w-[95%] lg:top-10 z-40 lg:mx-10 shadow-md lg:rounded-lg ">
    <div class="max-w-full px-2 sm:px-6 lg:px-2 py-2">
        <div class="flex flex-row h-16 items-center justify-between max-sm:flex-row-reverse">
            <div class="relative inset-y-0 left-0  items-center sm:hidden ">
                <!-- Mobile menu button-->
                <button type="button" id="mobile-menu-button"
                    class="relative inline-flex items-center justify-center rounded-md p-2  text-gray-400 hover:bg-warning hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--Icon when menu is closed.Menu open: "hidden", Menu closed: "block"-->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Icon when menu is open. Menu open: "block", Menu closed: "hidden"-->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex flex-1 lg:justify-between">
                <div class="flex-shrink-0 self-center max-sm:text-end">
                    <a href="/" class="">
                        <img class="w-24 hover:scale-90 transition duration-300 max-sm:pl-3" src="/images/logo.png" />
                    </a>
                </div>

                <div class="max-sm:hidden flex gap-3 items-center">
                    <a href="/"
                        class="btn btn-sm btn-ghost transition-all duration-300 hover:scale-90 {{ Request::is('/') ? 'bg-warning text-white' : '' }}">Home</a>
                </div>
                @if (Route::has('login'))
                    @auth
                        <div class="flex flex-row space-x-3 max-sm:hidden lg:hidden">
                            <div class="border border-grey-900 "></div>
                            <div class="dropdown dropdown-end self-center">
                                <label tabindex="0"
                                    class="btn btn-ghost btn-circle avatar transition duration-300 hover:scale-90 max-sm:btn-sm">
                                    <div class="w-9 rounded-full max-sm:w-7">
                                        <img src="{{ Auth::user()->profile_photo_url }}" />
                                    </div>
                                </label>
                                <ul tabindex="0"
                                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow-xl bg-base-100 border-2 rounded-box w-40 space-y-1">
                                    <li><a href=""
                                            class="hover:bg-warning hover:text-white {{ AUTH::user()->roles == 'USER' ? 'hidden' : 'block' }}">Dashboard</a>
                                    </li>
                                    <li><a href="" class="hover:bg-warning hover:text-white">Profile</a></li>
                                    <li>
                                        <form method="POST" class="hover:bg-warning hover:text-white"
                                            action="{{ route('logout') }}">
                                            @csrf

                                            <a :href="route('logout')"
                                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                                Log out
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-row gap-2 max-sm:hidden lg:hidden">
                            <a href="{{ route('login') }}"
                                class="btn btn-sm transition-all duration-300 hover:scale-90 text-center font-medium text-white  bg-black hover:bg-green-600 hover:outline-1 hover:outline-black hover:text-gray-900 rounded-2xl">Log
                                in</a>
                            <a href="{{ route('register') }}"
                                class="btn btn-sm transition-all duration-300 hover:scale-90 text-center font-medium text-gray-800  bg-gray-300 hover:bg-green-600 hover:text-gray-900 rounded-2xl ">Daftar</a>
                        </div>
                    @endauth
                @endif

                <div class="hidden sm:block login-register self-center flex-row space-x-2 px-2">
                    @if (Route::has('login'))
                        @auth
                            <div class="flex space-x-3">
                                <div class="border border-grey-900 "></div>
                                <div class="dropdown dropdown-end ">
                                    <label tabindex="0"
                                        class="btn btn-ghost hover:bg-warning btn-circle avatar transition duration-300 hover:scale-90">
                                        <div class="w-9  rounded-full">
                                            <img src="{{ Auth::user()->profile_photo_url }}" />
                                        </div>
                                    </label>
                                    <ul tabindex="0"
                                        class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-40 space-y-1">
                                        <li><a href="/author/dashboard"
                                                class="hover:bg-warning hover:text-white {{ AUTH::user()->roles == 'USER' ? 'hidden' : 'block' }}">Dashboard</a>
                                        </li>
                                        <li><a href="{{ route('profile.show') }}"
                                                class="hover:bg-warning hover:text-white">Profile</a></li>
                                        <li>
                                            <form method="POST" class="hover:bg-warning hover:text-white"
                                                action="{{ route('logout') }}">
                                                @csrf

                                                <a :href="route('logout')"
                                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                                    Log out
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('register') }}"
                                class="btn btn-sm hover:scale-90 transition duration-300 font-semibold text-gray-800 px-4 bg-gray-300 hover:bg-warning hover:text-gray-900 rounded-2xl text-sm">Sign
                                Up</a>
                            <a href="{{ route('login') }}"
                                class="btn btn-sm hover:scale-90 transition duration-300  font-semibold text-white px-4   bg-black hover:bg-warning  hover:outline-black hover:text-gray-900 rounded-2xl text-sm">Log
                                in</a>

                        @endauth
                    @endif
                </div>

            </div>

        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-2 px-2 py-3 hidden" id="mobile-menu-slide">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/"
                    class=" text-gray-400 rounded-md px-3 py-2 font-medium block {{ request()->is('/') ? 'bg-warning text-white' : '' }}"
                    aria-current="page"><i class="fa-solid fa-house w-7 "></i> Home</a>
                <a href="/"
                    class="text-gray-400 hover:bg-warning hover:text-white block rounded-md px-3 py-2 text-base font-medium {{ request()->is('struktur') ? 'bg-warning text-white' : '' }}"><i
                        class="fa-solid fa-shop w-7"></i> Struktur</a>
                <a href="/about"
                    class="text-gray-400 hover:bg-warning hover:text-white block rounded-md px-3 py-2 text-base font-medium {{ request()->is('about') ? 'bg-warning text-white' : '' }}"><i
                        class="fa-solid fa-building w-7 pl-1"></i> About</a>

                @if (Route::has('login'))
                    @auth
                        <div class="divider"></div>
                        <a href="/dashboard"
                            class="text-gray-400 hover:bg-warning hover:text-white block rounded-md px-3 py-2 text-base font-medium {{ request()->is('about') ? 'bg-warning text-white' : '' }}"><i
                                class="fa-solid  fa-table-columns w-7 pl-1"></i> Dashboard</a>

                        <a href="/dashboard"
                            class="text-gray-400 hover:bg-warning hover:text-white block rounded-md px-3 py-2 text-base font-medium {{ request()->is('about') ? 'bg-warning text-white' : '' }}"><i
                                class="fa-solid fa-users-line w-7 pl-1"></i> Input Data Gubernur (Pilgub)</a>
                        <a href="/dashboard"
                            class="text-gray-400 hover:bg-warning hover:text-white block rounded-md px-3 py-2 text-base font-medium {{ request()->is('about') ? 'bg-warning text-white' : '' }}"><i
                                class="fa-solid fa-people-group w-7 pl-1"></i> Input Data Walikota (Pilkada)</a>
                        <a href="/dashboard"
                            class="text-gray-400 hover:bg-warning hover:text-white block rounded-md px-3 py-2 text-base font-medium {{ request()->is('about') ? 'bg-warning text-white' : '' }}"><i
                                class="fa-solid fa-right-to-bracket w-7 pl-1"></i> Log Out</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="btn btn-sm w-full transition-all duration-300 hover:scale-90 text-center font-medium text-white  bg-black hover:bg-warning hover:outline-1 hover:outline-black hover:text-gray-900 rounded-2xl">Log
                            in</a>
                        <a href="{{ route('register') }}"
                            class="btn btn-sm w-full transition-all duration-300 hover:scale-90 text-center font-medium text-gray-800  bg-gray-300 hover:bg-warning hover:text-gray-900 rounded-2xl ">Daftar</a>

                    @endauth
                @endif

            </div>
        </div>


    </div>

</nav>


@push('addon-script')
    <script>
        $(document).ready(function() {
            $("#mobile-menu-button").on('click', function() {
                $("#mobile-menu-slide").slideToggle("slow");
            });
        });
    </script>
@endpush

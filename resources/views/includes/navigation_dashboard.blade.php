<div class="container lg:px-8 max-lg:px-0 sticky max-sm:top-0 lg:top-5 z-40">
    <div class="navbar bg-white lg:rounded-lg lg:border-1 z-40 shadow-md">
        <div class="flex flex-row grow justify-between">
            <div class="flex-none lg:hidden">
                <label for="my-drawer-2" aria-label="open sidebar" class="btn btn-square btn-ghost">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
            </div>
            <p class="font-bold px-5 text-gradient max-sm:hidden">Badan Saksi Nasional Golkar</p>

            @if (Route::has('login'))
                <div class="flex space-x-3 lg:px-8">
                    <div class="dropdown dropdown-end {{ Auth::user()->roles !== 'SAKSI' ? 'hidden' : '' }}">
                    </div>
                    <div class="grid">
                        <p class="">Hello, <b>{{ Auth::user()->name }}</b></p>
                        <p class="text-xs font-light text-end">{{ Auth::user()->roles }}</p>
                    </div>
                    <div class="border border-grey-900 "></div>
                    <div class="dropdown dropdown-end ">
                        <label tabindex="0"
                            class="btn btn-ghost hover:bg-warning btn-circle avatar transition duration-300 hover:scale-90">
                            <div class="w-9 rounded-full">
                                <img src="{{ Auth::user()->profile_photo_url }}" />
                            </div>
                        </label>
                        <ul tabindex="0"
                            class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-40">
                            <li>
                                <a href="/" class="hover:bg-warning hover:text-white">
                                    Homepage
                                </a>
                            </li>

                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}"
                                    class="hover:bg-warning hover:text-white">
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
            @endif
        </div>
    </div>
</div>

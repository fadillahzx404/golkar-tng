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
                        <img class="w-20 hover:scale-90 transition duration-300 max-sm:pl-3"
                            src="/images/logo-golkar.png" />
                    </a>
                </div>

                <div class="max-sm:hidden flex px-4 items-center">
                    <a href="/"
                        class="btn btn-sm btn-ghost transition-all duration-300 hover:scale-90 {{ Request::is('/') ? 'bg-warning text-white' : '' }}">Home</a>

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

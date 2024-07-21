<ul class="min-h-full space-y-4">
    <li><a href="/author/dashboard"
            class=" hover:bg-warning hover:text-black hover:font-normal transition duration-300 hover:scale-90 mx-2 {{ request()->is('author/dashboard') ? 'bg-warning text-black  font-semibold' : 'bg-primary text-gray-400' }}"><i
                class="fa-solid fa-house"></i>Dashboard</a>
    </li>
    @if (AUTH::user()->roles == 'SAKSI PILKADA')
        <li><a href="{{ route('input-data-pilkada.index') }}"
                class=" hover:bg-warning hover:text-black hover:font-normal transition duration-300 hover:scale-90 mx-2 {{ request()->is('author/input-data-pilkada') ? 'bg-warning text-black  font-semibold' : 'bg-primary text-gray-400' }}"><i
                    class="fa-solid fa-building-flag"></i>Input Data Pilkada</a>
        </li>
    @elseif(AUTH::user()->roles == 'SAKSI PILGUB')
        <li><a href="{{ route('input-data-pilgub.index') }}"
                class=" hover:bg-warning hover:text-black hover:font-normal transition duration-300 hover:scale-90 mx-2 {{ request()->is('author/input-data-pilgub') ? 'bg-warning text-black  font-semibold' : 'bg-primary text-gray-400' }}"><i
                    class="fa-solid fa-building-columns"></i>Input Data Pilgub</a>
        </li>
    @endif
    @if (AUTH::user()->roles == 'ADMIN' || AUTH::user()->roles == 'MASTER ADMIN')
        <li><a href="{{ route('quick-count.index') }}"
                class=" hover:bg-warning hover:text-black hover:font-normal transition duration-300 hover:scale-90 mx-2 {{ request()->is('author/quick-count') ? 'bg-warning text-black  font-semibold' : 'bg-primary text-gray-400' }}"><i
                    class="fa-solid fa-chart-pie"></i>Quick Count</a>
        </li>
        <li><a href="{{ route('data-suara.index') }}"
                class=" hover:bg-warning hover:text-black hover:font-normal transition duration-300 hover:scale-90 mx-2 {{ request()->is('author/data-suara') ? 'bg-warning text-black  font-semibold' : 'bg-primary text-gray-400' }}"><i
                    class="fa-brands fa-searchengin"></i>Data Suara</a>
        </li>
        <li><a href="{{ route('data-saksi.index') }}"
                class=" hover:bg-warning hover:text-black hover:font-normal transition duration-300 hover:scale-90 mx-2 {{ request()->is('author/data-saksi') ? 'bg-warning text-black  font-semibold' : 'bg-primary text-gray-400' }}"><i
                    class="fa-solid fa-eye"></i>Data Saksi</a>
        </li>
        <li><a href="{{ route('users.index') }}"
                class=" hover:bg-warning hover:text-black hover:font-normal transition duration-300 hover:scale-90 mx-2 {{ request()->is('author/users') ? 'bg-warning text-black  font-semibold' : 'bg-primary text-gray-400' }}"><i
                    class="fa-solid fa-users"></i>Users</a>
        </li>
        <li><a href="{{ route('report.index') }}"
                class=" hover:bg-warning hover:text-black hover:font-normal transition duration-300 hover:scale-90 mx-2 {{ request()->is('author/report') ? 'bg-warning text-black  font-semibold' : 'bg-primary text-gray-400' }}">
                <i class="fa-solid fa-file-export"></i>Report</a>
        </li>
    @endif


</ul>

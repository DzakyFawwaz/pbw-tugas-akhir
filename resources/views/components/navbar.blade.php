    <nav class="navigation-menu">
        <h1>Perpusmu </h1>
        <ul>
            @foreach ($menuList as $key => $menu)
                @if ($key === 'setting' || $key == 'saved')
                    @auth
                        <x-nav-link href="{{ $menu['url'] }}" :active="request()->is($key) || request()->is($key . '/*')">
                            {{ $menu['title'] }}
                        </x-nav-link>
                    @endauth
                @else
                    <x-nav-link href="{{ $menu['url'] }}" :active="request()->is($key) || request()->is($key . '/*')">
                        {{ $menu['title'] }}
                    </x-nav-link>
                @endif
            @endforeach

            @auth
                {{-- <span href="{{ $menu['url'] }}"
                    :active="request() - > is($key) || request() - > is($key.
                        '/*')">
                    {{ '@' . Auth::user()->username }}
                </span> --}}

                <form class="h-7 w-7 flex justify-center items-center group hover:bg-red-500 cursor-pointer transition-all bg-primary rounded-[100%]" w-100 text-center"
                    action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4 group-hover:min-w-3.5 group-hover:h-3.5 transition-all text-primary group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>


                    </button>
                </form>
            @else
                <x-nav-link href="/login">
                    Login
                </x-nav-link>
            @endauth

        </ul>

    </nav>

<nav class="navigation-menu">
    <h1>Perpusmu </h1>
    <ul>
        @foreach ($menuList as $key => $menu)
            <x-nav-link href="{{ $menu['url'] }}" :active="request()->is($key) || request()->is($key . '/*')">
                {{ $menu['title'] }}
            </x-nav-link>
        @endforeach

        @auth
            <span href="{{ $menu['url'] }}" :active="request()->is($key) || request()->is($key . '/*')">
                {{ Auth::user()->username }}
            </span>
        @else

         <x-nav-link href="/login">
                Login
            </x-nav-link>
        @endauth

    </ul>
    
</nav>

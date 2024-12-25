@props(['active' => false, 'icon' => ''])

<a {{ $attributes }} class="{{ $active ? 'underline underline-offset-[15px] font-bold' : '' }} underline-offset-[15px] transition-all" {{ $attributes }}>{{ $slot }}</a>

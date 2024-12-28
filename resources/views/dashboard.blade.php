<x-layout :book="$selected_book ?? null" page="dashboard">

    <br />
    <br />
    <br />

    @if (session('success'))
        <div class="mx-5 w-3/5">
            <div x-data="{ show: true }" x-show="show"
                class="bg-green-200 bg-opacity-10 border-l-4 border-green-500 text-green-500 p-4 rounded-lg">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-lg font-semibold">{{ session('success') ?? 'Login Success' }}</p>
                    </div>
                    <button @click="show = false" class="text-green-700 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>

                    </button>
                </div>
            </div>

        </div>
    @endif

    <br />


    @auth
        @isset($on_reads)
            @if (count($on_reads) > 0)
                <section class="main-section">
                    <h1 class="text-2xl">Lanjut Baca Yuk</h1>

                    <div class="continue-read-section">
                        @foreach ($on_reads as $book)
                            <x-book :is_reading="true" :book="$book"></x-book>
                        @endforeach


                    </div>
                </section>
            @endif
        @endisset
    @endauth

    @if (isset($trendings) && count($trendings) > 0)
        <section class="main-section">
            <h1 class="text-2xl my-5">Lagi Trending Minggu Ini</h1>

            <div class="trending-section">
                @foreach ($trendings as $book)
                    <x-book :book="$book"></x-book>
                @endforeach
            </div>
        </section>
        <br />
        <br />
    @endif

    @if (isset($favorites) && count($favorites) > 0)
        <section class="main-section">
            <h1 class="text-2xl mb-5">Favorit kamu banget</h1>

            <div class="trending-section">
                <div class="trending-section">
                    @foreach ($favorites as $book)
                        <x-book :book="$book"></x-book>
                    @endforeach
                </div>
            </div>
        </section>

        <br />
        <br />
        <br />

    @endif

</x-layout>

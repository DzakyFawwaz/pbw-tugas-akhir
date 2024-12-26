<x-layout :book="$selected_book" page="dashboard">

    <x-squares></x-squares>

    <br />
    <br />
    <br />

    @isset($on_reads)
        <section class="main-section">
            <h1 class="text-2xl">Lanjut Baca Yuk</h1>

            <div class="continue-read-section">
                @foreach ($on_reads as $book)
                    <x-book :is_reading="true" :book="$book"></x-book>
                @endforeach


            </div>
        </section>
    @endisset

    @if (count($trendings) > 0)
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

    @if (count($favorites) > 0)
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

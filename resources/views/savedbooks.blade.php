<x-layout :book="$selected_book" page="saved">

    <br />
    <br />
    <br />

    <section class="main-section">
        <div class="trending-section">
            @foreach ($saved_books as $book)
                <x-book :book="$book" page="saved"></x-book>
            @endforeach
        </div>
    </section>

</x-layout>

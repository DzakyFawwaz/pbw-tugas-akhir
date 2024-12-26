<x-layout>

    @isset($selected_book)
        <aside class="aside aside-1">
            <div class="selected-book">
                <p class="selected-book-type">{{ $selected_book->genre ?? '' }}</p>
                <div class="selected-book-image">
                    <img class="h-80" src="{{ $selected_book->cover_url ?? '' }}" width="200" height="320" />
                </div>
                <div class="selected-book-title">
                    <h1 class="text-2xl my-5">{{ $selected_book->title ?? '' }}</h1>
                </div>
                <p class="selected-book-author mb-2 ">{{ $selected_book->author ?? '' }}</p>
                <div class="selected-book-description">
                    <span class="text-gray-300">
                        {{ $selected_book->synopsis ?? '' }}
                    </span>
                </div>
                <div class="selected-book-rating">
                    <div class="stars">
                        <svg class="icon-rating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg class="icon-rating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg class="icon-rating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg class="icon-rating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg class="icon-rating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p>{{ $selected_book->rating ?? '' }}</p>
                </div>

                <a href="/book/{{ $selected_book->id ?? '' }}" class="selected-book-cta-read">
                    <div class="flex items-center justify-center gap-2">
                        @if ($selected_book->is_reading ?? false)
                            Lanjut Baca
                        @else
                            Lihat Buku
                        @endif
                    </div>
                </a>
            </div>
        </aside>
        <aside class="aside aside-2"></aside>
        <aside class="aside aside-3"></aside>

    @endisset

    <div class="square square-1"></div>
    <div class="square square-2"></div>

    <br />
    <br />
    <br />

    @isset($on_reads)
        <section class="main-section">
            <h1 class="text-2xl">Lanjut Baca Yuk</h1>

            <div class="continue-read-section">
                @foreach ($on_reads as $book)
                    <a class="book" href="/dashboard?selected-book={{ $book->id }}">
                        <img class="book-image book-image-1 rounded-lg" src="{{ $book->cover_url }}" width="200"
                            height="280" />
                        <div class="book-info">
                            <div>
                                <p class="book-title font-black">{{ $book->title }}</p>
                                <p class="book-author">{{ $book->author }}</p>
                            </div>
                            <div class="book-action">
                                <p class="book-progress-label">{{ $book->progress }}%</p>
                                <div class="book-progress">
                                    <div class="mt-4 flex w-full h-full bg-gray-200 rounded-full overflow-hidden"
                                        role="progressbar" aria-valuenow="{{ $book->progress }}" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-orange-200 text-xs text-white text-center whitespace-nowrap transition duration-500"
                                            style="width: {{ $book->progress }}%"></div>
                                    </div>
                                </div>
                                <div class="book-cta-read">
                                    <svg class="icon-play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd"
                                            d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>
        </section>
    @endisset

    @if (count($trendings) > 0)
        <section class="main-section">
            <h1 class="text-2xl my-5">Lagi Trending Minggu Ini</h1>

            <div class="trending-section">
                @foreach ($trendings as $book)
                    <a class="book" href="/dashboard?selected-book={{ $book->id }}" id="book">
                        <img class="book-image book-image-3" src="{{ $book->cover_url }}" width="100"
                            height="150" />
                        <div class="book-info">
                            <div>
                                <h2 class="book-title font-bold">{{ $book->title }}</h2>
                                <p class="book-author">{{ $book->author }}</p>
                            </div>
                            <div class="book-action">
                                <svg class="icon-rating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $book->rating }}</span>
                            </div>
                        </div>
                    </a>
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
                        <a href="/dashboard?selected-book={{ $book->id }}" class="book">
                            <img class="book-image book-image-3" src="{{ $book->cover_url }}" width="100"
                                height="150" />
                            <div class="book-info">
                                <div>
                                    <h2 class="book-title font-bold">{{ $book->title }}</h2>
                                    <p class="book-author">{{ $book->author }}</p>
                                </div>
                                <div class="book-action">
                                    <svg class="icon-rating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>{{ $book->rating }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <br />
        <br />
        <br />

    @endif

    <script>
        function select(bookId) {
            // var el = document.getElementById(' ')
            // const bookId = el.dataset.bookId
            console.log({
                el,
                bookId
            })

            // window.open(`/dashboard?selected-book=${bookId}`, "_self")


        }
    </script>
</x-layout>

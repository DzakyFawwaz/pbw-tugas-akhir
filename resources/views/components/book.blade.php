@props(['is_reading' => false])


@if ($is_reading)
    <a href="/{{ $page }}?selected-book={{ $book->book_id }}">
        <img class="book-image book-image-1 rounded-lg" src="{{ $book->cover_url }}" width="200" height="280" />
        <div class="book-info">
            <div>
                <p class="book-title font-black">{{ $book->title }}</p>
                <p class="book-author">{{ $book->author }}</p>
            </div>
            <div class="book-action">
                <p class="book-progress-label">{{ $book->progress }}%</p>
                <div class="book-progress">
                    <div class="mt-4 flex w-full h-full bg-gray-200 rounded-full overflow-hidden" role="progressbar"
                        aria-valuenow="{{ $book->progress }}" aria-valuemin="0" aria-valuemax="100">
                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-orange-200 text-xs text-white text-center whitespace-nowrap transition duration-500"
                            style="width: {{ $book->progress }}%"></div>
                    </div>
                </div>
                <a href="book/{{ $book->book_id }}" class="book-cta-read">
                    <svg class="icon-play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-6">
                        <path fill-rule="evenodd"
                            d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </a>
@else
    <a href="/{{ $page }}?selected-book={{ $book->id }}" class="book">
        <img class="book-image book-image-3" src="{{ $book->cover_url }}" width="100" height="150" />
        <div class="book-info">
            <div>
                <h2 class="book-title font-bold">{{ $book->title }}</h2>
                <p class="book-author">{{ $book->author }}</p>
            </div>

            @isset($book->rating)
            <div class="book-action">
                <svg class="icon-rating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-6">
                    <path fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                        clip-rule="evenodd" />
                </svg>
                <span>{{ $book->rating }}</span>
            </div>

            @endisset
        </div>
    </a>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/book.css'])

    <title>Perpusmu | {{ $book->title }}</title>
</head>

<body>
    <a class="book" href="/dashboard?selected-book={{ $book->id }}">
        <img class="book-image book-image-1 rounded-lg" src="{{ $book->cover_url }}" width="200" height="280" />
        <div class="book-info">
            <div>
                <p class="book-title font-black">{{ $book->title }}</p>
                <p class="book-author">{{ $book->author }}</p>
            </div>
            <div class="book-action">
                <p class="book-progress-label">{{ $book->progress ?? 0 }}%</p>
                <div class="book-progress">
                    <div class="mt-4 flex w-full h-full bg-gray-200 rounded-full overflow-hidden" role="progressbar"
                        aria-valuenow="{{ $book->progress ?? 0 }}" aria-valuemin="0" aria-valuemax="100">
                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-orange-200 text-xs text-white text-center whitespace-nowrap transition duration-500"
                            style="width: {{ $book->progress ?? 0 }}%"></div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</body>

</html>

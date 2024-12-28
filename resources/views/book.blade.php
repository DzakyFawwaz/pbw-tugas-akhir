<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/book.css'])

    <title>Perpusmu | {{ $book->title }}</title>
</head>

<body class="body-book">
    <section class=" xl:w-1/2 lg:w-1/2 md:w-1/w sm:w-100 pt-14 w-100 mx-auto">


        <div class="relative">

            <div onclick="window.history.back()"
                class="flex group justify-center items-center top-0 left-[-70px] absolute w-12 h-12 bg-primary rounded-full cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                    class="transition-all group-hover:w-6 group-hover:h-6 w-5 h-5 text-primary" stroke="currentColor"
                    class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
            </div>

        </div>

        <div class="xl:flex lg:flex md:flex sm:flex block">
            <img class="h-96 w-64 rounded-lg" src="{{ $book->cover_url }}" />
            <div class="p-8">
                <div>
                    <h1 class="text-3xl font-bold ">{{ $book->title }}</h1>
                    <span>Oleh</span>
                    <a href="https://id.wikipedia.org/wiki/{{ str_replace(' ', '_', $book->author) }}" target="_blank"
                        class="text-blue-500 underline">
                        {{ $book->author }}</a>
                    <span> ·
                        {{ date('Y', strtotime($book->publication_date)) }}</span>
                </div>

                @isset($book->rating)
                    <div class="flex items-center align-items-center gap-2 mt-2">
                        <div class="flex gap-1">
                            <svg class="icon-rating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="size-6">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-white text-lg mt-1.5">{{ $book->rating ?? '' }}</span>
                    </div>
                @endisset

                <div class="flex gap-10">

                    <table class="mt-5">
                        <tr>
                            <td class="text-white">Penulis</td>
                            <td class="text-center text-white" width="30">:</td>
                            <td class="text-white">{{ $book->author }}</td>
                        </tr>
                        <tr>
                            <td class="text-white">Penerbit</td>
                            <td class="text-center text-white" width="30">:</td>
                            <td class="text-white">{{ $book->publisher }}</td>
                        </tr>
                        <tr>
                            <td class="text-white">Tanggal Publikasi</td>
                            <td class="text-center text-white" width="30">:</td>
                            <td class="text-white">{{ date('D, d M Y', strtotime($book->publication_date)) }}</td>
                        </tr>
                        <tr>
                            <td class="text-white">Bahasa</td>
                            <td class="text-center text-white" width="30">:</td>
                            <td class="text-white">{{ $book->language }}</td>
                        </tr>
                        <tr>
                            <td class="text-white">Jumlah Halaman</td>
                            <td class="text-center text-white" width="30">:</td>
                            <td class="text-white">{{ $book->number_of_pages }}</td>
                        </tr>
                        <tr>
                            <td class="text-white">Genre</td>
                            <td class="text-center text-white" width="30">:</td>
                            <td class="text-white">{{ $book->genre }}</td>
                        </tr>
                    </table>
                </div>


            </div>


        </div>
        @isset($book->synopsis)
            <div class="my-8">
                <h1 class=" mb-3 text-xl">Sinopsis</h1>

                <div class="text-white">{!! $book->synopsis !!}</div>
            </div>
        @endisset

        @isset($book->stories)
            <hr />
            <div class="mx-auto mt-10 text-white">
                {!! $book->stories !!}
            </div>

            @else

            <p class="text-center w-full mx-auto mt-20">No chapters yet</p>
        @endisset

    </section>
</body>

</html>

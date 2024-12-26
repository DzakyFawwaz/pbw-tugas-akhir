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
    <section class="xl:px-40 lg:px-20 md:px-10 sm:px-10 p-0 pt-14">
        <div class="xl:flex lg:flex md:flex sm:flex block">
            <img class="h-96 w-64 rounded-lg" src="{{ $book->cover_url }}" />
            <div class="p-8">
                <div>
                    <h1 class="text-3xl font-bold ">{{ $book->title }}</h1>
                    <p class="text-white">{{ $book->author }}</p>
                </div>
                <div class="flex items-center align-items-center gap-2 mt-2">
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p class="text-white text-lg mt-1.5">{{ $book->rating ?? '' }}</p>
                    <span class="text-white">|</span>
                    <p class="text-white text-lg mt-1.5">{{ $book->genre ?? '' }}</p>
                </div>


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
                        <td class="text-white">{{ $book->publication_date }}</td>
                    </tr>
                </table>
                <div class="mt-5 mb-3 text-white">{{ $book->description }}</div>

                <div class="text-white">{{ $book->synopsis }}</div>
            </div>

        </div>
        <div class="flex gap-8 mt-10">
            <div class="p-4 border border-white rounded-lg">
                <table>
                    <tr>
                        <td>Penulis</td>
                        <td class="text-center" width="30">:</td>
                        <td>{{ $book->author }}</td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td class="text-center" width="30">:</td>
                        <td>{{ $book->publisher }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Publikasi</td>
                        <td class="text-center" width="30">:</td>
                        <td>{{ $book->publication_date }}</td>
                    </tr>
                </table>
            </div>
        </div>

    </section>
</body>

</html>

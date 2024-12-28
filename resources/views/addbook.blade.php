<x-layout page="add-book">

</x-layout>

<div class="pb-40 mb-10 mx-auto mt-24 max-w-screen-md bg-[#231360] rounded-lg shadow-md p-6 overflow-hidden relative">
    <h2 class="text-2xl font-bold text-white text-center mb-6">Tambah Buku</h2>

    <form action="{{ route('add-book.create') }}" method="POST">
        @csrf
        <div class="grid grid-cols-2 gap-6">
            <div class="col-span-2">
                <label for="title" class="block text-white">Judul:</label>
                <input type="text" id="title" name="title" class="w-full p-2 rounded"
                    placeholder="Masukkan judul buku" required>
                @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
             <div class="col-span-2">
                <label for="cover_url" class="block text-white">URL Sampul:</label>
                <input type="url" id="cover_url" name="cover_url" class="w-full p-2 rounded"
                    placeholder="Masukkan URL gambar sampul" required>
                @error('cover_url')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="author" class="block text-white">Penulis:</label>
                <input type="text" id="author" name="author" class="w-full p-2 rounded"
                    placeholder="Masukkan nama penulis">
                @error('author')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="genre" class="block text-white">Genre:</label>
                <input type="text" id="genre" name="genre" class="w-full p-2 rounded"
                    placeholder="Masukkan genre buku">
                @error('genre')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-2">
                <label for="description" class="block text-white">Deskripsi:</label>
                <textarea id="description" name="description" class="w-full p-2 rounded" placeholder="Masukkan deskripsi buku"></textarea>
                @error('description')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-2">
                <label for="tags" class="block text-white">Tag:</label>
                <input type="text" id="tags" name="tags" class="w-full p-2 rounded"
                    placeholder="Masukkan tag dipisahkan dengan koma">
                @error('tags')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="publication_date" class="block text-white">Tanggal Publikasi:</label>
                <input type="date" id="publication_date" name="publication_date" class="w-full p-2 rounded">
                @error('publication_date')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="number_of_pages" class="block text-white">Jumlah Halaman:</label>
                <input type="number" id="number_of_pages" name="number_of_pages" class="w-full p-2 rounded"
                    placeholder="Masukkan jumlah halaman">
                @error('number_of_pages')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="publisher" class="block text-white">Penerbit:</label>
                <input type="text" id="publisher" name="publisher" class="w-full p-2 rounded"
                    placeholder="Masukkan nama penerbit">
                @error('publisher')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="language" class="block text-white">Bahasa:</label>
                <input type="text" id="language" name="language" class="w-full p-2 rounded"
                    placeholder="Masukkan bahasa">
                @error('language')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-2">
                <label for="characters" class="block text-white">Karakter:</label>
                <input type="text" id="characters" name="characters" class="w-full p-2 rounded"
                    placeholder="Masukkan karakter utama">
                @error('characters')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="flex justify-center items-start pt-14 bottom-[-130px] absolute h-60 w-60 bg-primary rounded-[50%] mx-auto left-0 right-0">
                <p class="text-primary font-bold text-xl">Tambah Buku</p>
            </button>
        </div>
    </form>

</div>

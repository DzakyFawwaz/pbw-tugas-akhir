<x-layout-auth>
    <x-slot:title>{{ $title }}</x-slot:title>

    @if (session('success'))
        <div class="mx-5 w-1/5 absolute top-10 left-10">
            <div x-data="{ show: true }" x-show="show"
                class="bg-white bg-opacity-10 border-l-4 border-green-500 text-green-500 p-4 rounded-lg">
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

    <form action="{{ route('auth.login') }}" method="POST">
        @csrf

        <section class="form-container">
            <div class="form-wrapper">
                <header class="mb-7">
                    <h1 class="title-form">
                        Selamat Datang <br />
                        Kembali
                    </h1>
                </header>

                <div class="input-wrapper">
                    <div>
                        <input type="text" id="username" name="username" value="{{ old('username') }}"
                            placeholder="Username" />
                        @error('username')
                            <div class="text-red-500 mt-3">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <div class="password-input">
                            <input type="password" id="password" name="password" value="{{ old('password') }}"
                                placeholder="Password" />
                            <i class="password-toggle"></i>
                        </div>
                        @error('password')
                            <div class="text-red-500 mt-3">{{ $message }}</div>
                        @enderror

                    </div>
                    <button type="submit" class="button-normal">Masuk</button>

                </div>

            </div>
            <span>Belum punya akun? <a href="/signup">Buat Akun</a></span>
        </section>

        <section class="button-container">
            <button type="submit" class="button-text">
                <span>Masuk</span>
                <div class="icon-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </div>
                </a>
                <div class="button-circle-wrapper">
                    <div class="button-circle"></div>
                </div>
        </section>

    </form>

</x-layout-auth>

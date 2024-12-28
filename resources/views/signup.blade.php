<x-layout-auth>
    <x-slot:title>{{ $title }}</x-slot:title>

    <form action="{{ route('auth.signup') }}" method="POST">
        @csrf

        <section class="form-container">
            <div class="form-wrapper">
                <header class="mb-7">
                    <h1 class="title-form">Buat Akun</h1>
                </header>
                <div class="input-wrapper">

                    <div>
                        <input placeholder="Username" type="text" name="username" id="username"
                            value="{{ old('username') }}"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        @error('username')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <input placeholder="Email" type="email" name="email" id="email"
                            value="{{ old('email') }}"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    <div>
                        <input placeholder="Password" type="password" name="password" id="password"
                            value="{{ old('password') }}"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <input placeholder="Konfirmasi Password" type="password" name="password_confirmation"
                            id="password_confirmation"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        @error('password_confirmation')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="checkbox-container">
                        <input type="checkbox" id="terms" name="terms" {{ old('terms') ? 'checked' : '' }} />
                        <div>
                            <label for="terms">Saya menyetujui <a>Ketentuan Layanan</a> dan mengikuti
                                <a>Kebijakan Privasi</a></label>
                            @error('terms')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="button-normal">Buat Akun</button>
                </div>
            </div>
            <span>Sudah punya akun? <a href="/login">Masuk</a></span>
        </section>

        <section class="button-container">
            <button type="submit" class="button-text">
                <span>Buat <br />
                    Akun</span>
                <div class="icon-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </button>
            <div class="button-circle-wrapper">
                <div class="button-circle"></div>
            </div>
        </section>

    </form>
</x-layout-auth>

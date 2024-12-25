<x-layout-auth>
    <x-slot:title>{{ $title }}</x-slot:title>

    <form action="{{ route('login.authenticate') }}" method="POST">
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
                    <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Username" />
                    @error('username')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="password-input">
                        <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Password" />
                        <i class="password-toggle"></i>
                    </div>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
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

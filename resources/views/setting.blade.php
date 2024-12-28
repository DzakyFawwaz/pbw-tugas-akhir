<x-layout page="setting">

    <div class="overflow-hidden relative mx-auto mt-24 max-w-md bg-[#231360] rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-white text-center mb-6">Edit Profil</h2>


        <form action="{{ route('setting.update') }}" method="POST" class="space-y-4">
            <div class="overflow-hidden pb-24 grid grid-cols-2 gap-6">
                @csrf

                <div class="col-span-2">
                    <label for="username" class="block text-sm font-medium text-white">Username</label>
                    <input placeholder="Username" type="text" name="username" id="username"
                        value="{{ $profile->username }}"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @error('username')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-2">
                    <label for="fullname" class="block text-sm font-medium text-white">Full Name</label>
                    <input placeholder="fullname" type="text" name="fullname" id="fullname"
                        value="{{ $profile->fullname }}"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @error('fullname')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-2">
                    <label for="email" class="block text-sm font-medium text-white">Email</label>
                    <input placeholder="Email" type="email" name="email" id="email"
                        value="{{ $profile->email }}"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-2">
                    <label for="password" class="block text-sm font-medium text-white">Password</label>
                    <input placeholder="Password" type="password" name="password" id="password"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-2">
                    <label for="password_confirmation" class="block text-sm font-medium text-white">Confirm
                        Password</label>
                    <input placeholder="Konfirmasi Password" type="password" name="password_confirmation"
                        id="password_confirmation"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <button type="submit"
                    class="flex justify-center items-start pt-10 bottom-[-100px] absolute h-48 w-48 bg-primary rounded-[50%] mx-auto left-0 right-0">
                    <p class="text-primary font-bold text-xl">Simpan</p>
                </button>
            </div>
        </form>
    </div>

</x-layout>

<x-layout page="setting">

    <div class="mx-auto mt-24 max-w-md bg-[#231360] rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-white text-center mb-6">Edit Profil</h2>

        <form action="{{ route('setting.update') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="username" class="block text-sm font-medium text-white">Username</label>
                <input placeholder="Username" type="text" name="username" id="username"
                    value="{{ $profile->username }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                @error('username')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="fullname" class="block text-sm font-medium text-white">Full Name</label>
                <input placeholder="fullname" type="text" name="fullname" id="fullname"
                    value="{{ $profile->fullname }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                @error('fullname')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-white">Email</label>
                <input placeholder="Email" type="email" name="email" id="email" value="{{ $profile->email }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-white">Password</label>
                <input placeholder="Password" type="password" name="password" id="password"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-white">Confirm
                    Password</label>
                <input placeholder="Konfirmasi Password" type="password" name="password_confirmation"
                    id="password_confirmation"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>

            <button type="submit"
                class="w-full mt-4 bg-[#fcdfb3] text-[#231360] font-semibold py-2 px-4 rounded-md shadow focus:outline-none focus:ring-2 hover:shadow-md focus:ring-offset-2">
                Save Changes
            </button>
        </form>

        <form class="w-100 text-center" action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit"
                class="flex gap-2 items-center mx-auto mt-5 text-red-600 py-2 px-4 rounded-md shadow hover:underline ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                </svg>
                Logout
            </button>
        </form>
    </div>

</x-layout>

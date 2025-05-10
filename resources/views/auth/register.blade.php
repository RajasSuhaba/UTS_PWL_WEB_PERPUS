<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama')" class="text-white" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-white" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Identity (NIM) -->
        <div class="mt-4">
            <x-input-label for="identitas" :value="__('Identitas (NIM)')" class="text-white" />
            <x-text-input id="identitas" class="block mt-1 w-full" type="number" name="identitas" :value="old('identitas')" required />
            <x-input-error :messages="$errors->get('identitas')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="telepon" :value="__('No HP')" class="text-white" />
            <x-text-input id="telepon" class="block mt-1 w-full" type="number" name="telepon" :value="old('telepon')" required />
            <x-input-error :messages="$errors->get('telepon')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="class" :value="__('Jurusan')" class="text-white" />
            <x-text-input id="class" class="block mt-1 w-full" type="text" name="class" :value="old('class')" required />
            <x-input-error :messages="$errors->get('class')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="adress" :value="__('Alamat')" class="text-white" />
            <x-text-input id="adress" class="block mt-1 w-full" type="text" name="adress" :value="old('adress')" required />
            <x-input-error :messages="$errors->get('adress')" class="mt-2" />
        </div>

        <!-- Role -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Daftar Sebagai')" class="text-white" />
            <x-text-input id="role" class="block mt-1 w-full" type="text" name="role" value="mahasiswa" readonly />
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-white" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Register Button -->
        <div class="flex items-center justify-end mt-4 space-x-3">
            <a href="{{ route('login') }}"
                class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition ease-in-out duration-150">
                {{ __('Masuk') }}
            </a>

            <x-primary-button>
                {{ __('Daftar') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>

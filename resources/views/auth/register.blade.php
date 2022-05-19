<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" class="w-full max-w-lg">
            @csrf

            <!-- Name -->
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            {{-- NIK dan NIP --}}
            <div class="flex flex-wrap -mx-3 mb-6 mt-4">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-label for="nik" :value="__('NIK')" />

                    <x-input id="nik" class="block mt-1 w-full" type="number" name="nik" :value="old('nik')" autofocus />
                </div>
                <div class="w-full md:w-1/2 px-3 ml-4 mb-6 md:mb-0">
                    <x-label for="nip" :value="__('NIP')" />

                    <x-input id="nip" class="block mt-1 w-full" type="number" name="nip" :value="old('nip')" autofocus />
                </div>
            </div>

            {{-- Tgl Lahir dan HP --}}
            <div class="flex flex-wrap -mx-3 mb-6 mt-4">
                <div class="w-1/3 px-3 mb-6 md:mb-0">
                    <x-label for="birth_date" :value="__('Tanggal Lahir')" />

                    <x-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date')"
                        required autofocus />
                </div>
                <div class="w-full px-3 ml-4 mb-6 md:mb-0">
                    <x-label for="handphone" :value="__('Handphone')" />

                    <x-input id="handphone" class="block mt-1 w-full" type="number" name="handphone" :value="old('handphone')"
                        autofocus />
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6 mt-4">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <x-label for="gender" :value="__('Jenis Kelamin')" />
                    <div class="relative">
                        <select name="gender"
                            class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            id="grid-gender">
                            <option></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="w-full md:w-1/3 px-3 ml-4 mb-6 md:mb-0">
                    <x-label for="blood_type" :value="__('Golongan Darah')" />
                    <div class="relative">
                        <select name="blood_type"
                            class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            id="grid-blood">
                            <option></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

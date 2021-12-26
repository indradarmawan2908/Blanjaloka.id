<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Form Select -->
            <div class="mt-4">
                <label for="role-option">Role</label>
                <select class="form-control" id="role-option" name="role">
                <option value=""> Select Role </option>    
                @foreach ($roles as $role)
                    <option value="{{ $role->id_role }}">{{ $role->role }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <label for="id_ provinsi-option">Provinsi</label>
                <select class="form-control" id="id_provinsi-option" name="id_provinsi">
                <option value=""> Select Provinsi </option>    
                    @foreach ($provinsis as $provinsi)
                    <option value="{{ $provinsi->id }}">{{ $provinsi->provinsi }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <label for="kota-option">Kota</label>
                <select class="form-control" id="kota-option" name="id_kota">
                <option value=""> Select Kota </option>    
                @foreach ($kotas as $kota)
                    <option value="{{ $kota->id }}">{{ $kota->kota }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <label for="kelurahan-option">Kelurahan</label>
                <select class="form-control" id="kelurahan-option" name="id_kelurahan">
                <option value=""> Select Kelurahan </option>    
                @foreach ($kelurahans as $kelurahan)
                    <option value="{{ $kelurahan->id }}">{{ $kelurahan->kelurahan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <label for="kecamatan-option">Kecamatan</label>
                <select class="form-control" id="kecamatan-option" name="id_kecamatan">
                <option value=""> Select Kecamatan </option>    
                @foreach ($kecamatans as $kecamatan)
                    <option value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="phone" :value="__('Phone')" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="provider_id" :value="__('Provider Id')" />
                <x-input id="provider_id" class="block mt-1 w-full" type="text" name="provider_id" :value="old('provider_id')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="referral_code" :value="__('Referral Code')" />
                <x-input id="referral_code" class="block mt-1 w-full" type="text" name="referral_code" :value="old('referral_code')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="postal_code" :value="__('Postal Code')" />
                <x-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code')" required autofocus />
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

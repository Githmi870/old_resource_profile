<x-guest-layout>
    @vite ('resources/js/pages/reg_con.js')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <x-input-label for="gnd_uid">Grama Niladari Division</x-input-label>
            <x-text-input name="gnd_uid" id="gnd_uid" list="gndList" class="block mt-1 w-full" placeholder="Search here with your gnd number..(ex: 176B)"></x-text-input>
            <datalist id="gndList">
                @foreach(\App\Models\GramaNiladariDivision::all() as $gnd)
                <option value="{{ $gnd->gnd_uid }}">{{ $gnd->gnd_name }} - {{ $gnd->gnd_number }}</option>
                @endforeach
            </datalist>
            <x-input-error :messages="$errors->get('gnd_uid')" class="mt-2" />
        </div>

        <!-- Occupation -->
        <div class="mt-4">
            <x-input-label for="occupation" :value="__('Occupation')" />
            <select name="occupation" id="occupation" class="block mt-1 w-full border rounded-lg border-gray-300">
                <option value="" selected disabled>-- Select Occupation --</option>
                <option value="do" {{ old('occupation') == 'do' ? 'selected' : '' }}>Development Officer</option>
                <option value="gno" {{ old('occupation') == 'gno' ? 'selected' : '' }}>Grama Niladhari Officer</option>
            </select>
            <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Officer Telephone -->
        <div class="mt-4">
            <x-input-label for="officer_tele" :value="__('Telephone')" />
            <x-text-input id="officer_tele" name="officer_tele" type="text" class="block mt-1 w-full" :value="old('officer_tele')" required />
            <x-input-error :messages="$errors->get('officer_tele')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Submit -->
        <div class="flex items-center justify-end mt-6">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
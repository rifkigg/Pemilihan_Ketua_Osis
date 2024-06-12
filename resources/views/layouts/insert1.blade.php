<x-guest-layout>
    <form method="POST" action="{{ route('admin.insert') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Role -->
        <div>
            <x-input-label for="role" :value="__('role')" />
            <x-text-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('role')" required autofocus autocomplete="role" />
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <!-- Nisn -->
        <div>
            <x-input-label for="nisn" :value="__('nisn')" />
            <x-text-input id="nisn" class="block mt-1 w-full" type="text" name="nisn" :value="old('nisn')" required autofocus autocomplete="nisn" />
            <x-input-error :messages="$errors->get('nisn')" class="mt-2" />
        </div>

        {{-- Status --}}
        <div>
            <x-input-label for="status" :value="__('status')" />
            <select name="status" id="status" class="form-select">
                <option value="Sudah Voting">Sudah Voting</option>
                <option value="Belum Voting">Belum Voting</option>
            </select>
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div>

        {{-- jenis_kelamin --}}
        <div>
            <x-input-label for="jenis_kelamin" :value="__('jenis_kelamin')" />
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>
    </form>
</x-guest-layout>

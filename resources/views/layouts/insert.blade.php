<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi | Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styleInsert.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h2 class="text-center">Tambah Pengguna</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.insert') }}">
                            @csrf
                            <div class="form-group">
                                <x-input-label for="name" :value="__('Name')" />
                                {{-- <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" :value="old('name')" required autofocus autocomplete="name" > --}}
                                <x-text-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="role" :value="__('Role')" />
                                {{-- <input type="text" class="form-control" id="role" placeholder="Masukkan role" :value="old('role')" required autofocus autocomplete="role"> --}}
                                <x-text-input id="role" class="block mt-1 w-full form-control" type="text" name="role" :value="old('role')" required autofocus autocomplete="role" />
                                <x-input-error :messages="$errors->get('role')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="nisn" :value="__('Nisn/NIP')" />
                                {{-- <input type="number" class="form-control" id="nisn" placeholder="Masukkan nisn" :value="old('nisn')" required autofocus autocomplete="nisn"> --}}
                                <x-text-input id="nisn" class="block mt-1 w-full form-control" type="text" name="nisn" :value="old('nisn')" required autofocus autocomplete="nisn" />
                                <x-input-error :messages="$errors->get('nisn')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="status" :value="__('Status')" />
                                <select name="status" id="status" class="form-select form-control">
                                    <option value="Sudah Voting">Sudah Voting</option>
                                    <option value="Belum Voting">Belum Voting</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="jenis_kelamin" :value="__('Jenis_kelamin')" />
                                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="password" :value="__('Password')" />
                                {{-- <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required autocomplete="new-password"> --}}

                                <x-text-input id="password" class="block mt-1 w-full form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                {{-- <input type="password" class="form-control" id="password" placeholder="confirm your password" name="password_confirmation" required autocomplete="new-password"> --}}
                                <x-text-input id="password_confirmation" class="block mt-1 w-full form-control"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                           
                            <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                            <button type="reset" class="btn btn-md btn-warning btn-block mt-2">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popper
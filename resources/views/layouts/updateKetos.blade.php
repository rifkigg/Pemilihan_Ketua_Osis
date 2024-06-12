<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Products - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div >
                            <div class="card-header bg-dark text-light">
                                <h2 class="text-center">Edit Ketua Osis</h2>
                            </div>
                            <form method="POST" action="{{ route('ketos.update', $ketua_osis->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                            <div class="form-group mb-3">
                                <x-input-label for="name" :value="__('Nama')" />
                                <x-text-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" value="{{ old('name', $ketua_osis->name) }}" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <x-input-label for="kelas" :value="__('Kelas')" />
                                <x-text-input id="kelas" class="block mt-1 w-full form-control" type="text" name="kelas" :value="old('kelas')"  value="{{ old('kelas', $ketua_osis->kelas) }}" required autofocus autocomplete="kelas" />
                                <x-input-error :messages="$errors->get('kelas')" class="mt-2" />
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <x-input-label for="image" :value="__('Foto')" />
                                <x-text-input id="image" class="block mt-1 w-full form-control" type="file" name="image" :value="old('image')"  value="{{ old('image', $ketua_osis->image) }}" required autofocus autocomplete="image" />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            
                                <!-- error message untuk image -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <x-input-label for="visi" :value="__('Visi')" />
                                <textarea class="form-control @error('visi') is-invalid @enderror" name="visi" rows="5" placeholder="Masukkan visi Product"  value="{{ old('visi', $ketua_osis->visi) }}">{{ old('visi') }}</textarea>
                                <x-input-error :messages="$errors->get('visi')" class="mt-2" />
                            
                                <!-- error message untuk description -->
                                @error('description')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <x-input-label for="misi" :value="__('Misi')" />
                                <textarea class="form-control @error('misi') is-invalid @enderror" name="misi" rows="5" placeholder="Masukkan misi Product"  value="{{ old('misi', $ketua_osis->image) }}">{{ old('misi') }}</textarea>
                                <x-input-error :messages="$errors->get('misi')" class="mt-2" />
                            
                                <!-- error message untuk description -->
                                @error('description')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <x-input-label for="slogan" :value="__('Slogan')" />
                                <textarea class="form-control @error('slogan') is-invalid @enderror" name="slogan" rows="5" placeholder="Masukkan slogan Product"  value="{{ old('slogan', $ketua_osis->slogan) }}">{{ old('slogan') }}</textarea>
                                <x-input-error :messages="$errors->get('slogan')" class="mt-2" />
                            
                                <!-- error message untuk description -->
                                @error('description')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-label for="no" :value="__('Nomor')" />
                                        <x-text-input id="no" class="block mt-1 w-full form-control" type="number" name="no" :value="old('no')" required autofocus autocomplete="no"  value="{{ old('no', $ketua_osis->no) }}" />
                                        <x-input-error :messages="$errors->get('no')" class="mt-2" />
                                    
                                        <!-- error message untuk price -->
                                        @error('price')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-label for="vote" :value="__('Hasil Vote')" />
                                        <x-text-input id="vote" class="block mt-1 w-full form-control" type="number" name="vote" :value="old('vote')" required autofocus autocomplete="vote"  value="{{ old('vote', $ketua_osis->vote) }}" />
                                        <x-input-error :messages="$errors->get('vote')" class="mt-2" />
                                    
                                        <!-- error message untuk stock -->
                                        @error('stock')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="tombol d-flex">
                            <button type="submit" class="btn btn-md btn-primary me-3 form-control">SAVE</button>
                            <button type="reset" class="btn btn-md btn-warning form-control">RESET</button>
                            </div>


                        </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'visi' );
        CKEDITOR.replace( 'misi' );
        CKEDITOR.replace( 'slogan' );
    </script>
</body>
</html>
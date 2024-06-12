<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}" />
    <title>Boostrap Login</title>
  </head>
  <body>
    <div
      class="container d-flex justify-content-center align-items-center min-vh-100"
    >
      <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div
          class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
          style="background: #353636"
        >
          <div class="featured-image mb-3">
            <img
              src="{{ asset('image/Poster Suara Demokrasi Ilustratif Biru dan Oranye.png') }}"
              class="img-fluid max-width: 100%;"
              width="1000"
            />
          </div>
        </div>

        <div class="col-md-6 right-box">
          <div class="row align-items-center">
            <div class="header-text mb-4">
              <h1>
                PILKETOS
                <img src="images/pngwing.com (2).png" alt="" width="40" />
              </h1>
              <p>
                <b
                  >" Mari Sukseskan Pemilihan Ketua OSIS dengan Pilihan yang
                  Bijak "</b
                >
              </p>
            </div>

            {{-- Form Login --}}
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
              @csrf

                {{-- Name --}}
              <div class="input-group mb-3">
                <input
                  type="text"
                  class="form-control form-control-lg bg-light fs-6"
                  placeholder="Nama"
                  id="name" 
                  type="text" 
                  name="name" 
                  :value="old('name')" 
                  required autofocus autocomplete="username"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>

              <div class="input-group mb-1">
                <input
                  type="password"
                  class="form-control form-control-lg bg-light fs-6"
                  placeholder="Password"
                  id="password"
                  type="password"
                  name="password"
                  required autocomplete="current-password" 
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>

                <div class="form-check mt-3">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="remember_me" 
                    type="checkbox"
                    name="remember"
                  />
                  <label for="remember_me" class="form-check-label text-secondary"
                    ><small>{{ __('Ingatkan Saya') }}</small></label
                  >
                </div>
              </div>
              <div class="input-group mb-3">
                <button type="submit" class="btn btn-lg btn-primary w-100 fs-6 mt-4">{{ __('Log in') }}</button>
              </div>
              <div class="row">
                <small>Ada kendala ? <a href="https://wa.me/qr/53YQBXCBXAIGL1">Hubungi Admin</a></small>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Voting Website</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/ketos.css') }}" />
  </head>
  <body>
    @if ( Auth::user()->status  == 'Belum Voting')
    <header class="bg-secondary py-3">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <img
            src="{{ asset('image/logo.png') }}"
            alt=""
            class="logo-smk mb-5"
            width="140px"
          />
          <div class="text-center">
            <h1 class="roboto-medium">PEMILIHAN KETUA OSIS</h1>
            <h2>SMK Negeri 02 BANGKALAN</h2>
            <p>
              <em
                >OSIS adalah cerminan dari semangat kolaborasi dan pemimpin masa
                depan. Mari bersama-sama membuat perubahan yang positif melalui
                pemilihan ini. Pemilihan OSIS adalah kesempatan untuk
                menghadirkan suara kita dalam upaya membangun lingkungan sekolah
                yang lebih baik.</em
              >
            </p>
          </div>
          <img
            src="{{ asset('image/logo-osis1.png') }}"
            alt=""
            class="logo-osis mb-5"
            width="140px"
          />
        </div>
      </div>
    </header>
    <livewire:voting-ketos :ketua_osis="$ketua_osis" :totalvote="$totalvote" :labels="$labels" :datas="$datas"/>    
    @else
    <div class="card">
            <div class="alert alert-primary mx-auto" style="width: 50%" role="alert">
        <h3>Terimakasih telah memberikan suara anda dengan baik</h3>
      </div>
        <a class="btn btn-primary mx-auto p-2 text-center mx-auto" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="width: 50%">Kembali</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </div>

    @endif 


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>

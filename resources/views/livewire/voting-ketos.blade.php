<div class="container mt-5">
    <div class="row">
        @foreach ($ketua_osis as $ketos)
        <div class="col-md-4 mb-4">
            <div class="card mb-3">
                <img src="{{ asset('/storage/ketos/'.$ketos->image) }}" class="card-img-top" alt="Candidate 1" />
                <div class="card-body">
                    <h5 class="card-title">{{ $ketos->name }}</h5>
                    <p class="card-text">Kelas: {{ $ketos->kelas }}</p>
                    <p class="card-text">
                        <em>{!! $ketos->slogan !!}</em>
                    </p>
                    <a href="{{ route('voting.show', $ketos->id) }}" class="btn btn-primary">Visi Misi</a>
                    <a href="{{ route('voting') }}" wire:click.prevent="clickVoting({{ $ketos->id }})" class="btn btn-danger">Voting</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- <a class="btn btn-primary mx-auto p-2 text-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form> --}}
</div>
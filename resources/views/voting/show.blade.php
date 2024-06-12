<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visi Misi - E-Voting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('/storage/ketos/'.$ketua_osis->image) }}" class="rounded" style="width: 150px">
                        <h3>{{ $ketua_osis->name }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>{{ $ketua_osis->name }}</h3>
                        <hr/>
                        <h3>Visi</h3>
                        <p>{!! $ketua_osis->visi !!}</p>
                        <h3>Misi</h3>
                        <code>
                            <p>{!! $ketua_osis->misi !!}</p>
                        </code>
                        <hr/>
                        <a href="{{ route('voting') }}" class="btn btn-primary" style="width: 100%">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
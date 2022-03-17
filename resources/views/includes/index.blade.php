@extends("layouts.main")

@section('content')

@foreach($movies as $movie)
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
        <p class="card-text"><span>Nazione di produzione: </span>{{ $movie->nationality }}</p>
        <p class="card-text"><span>Data di pubblicazione: </span>{{ $movie->date }}</p>
        <p class="card-text"><span>Media Voto: </span>{{ $movie->vote }}</p>
        <a href="#" class="card-link">Dettagli</a>
    </div>
</div>
@endforeach

@endsection
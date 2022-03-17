@extends("layouts.main")

@section('content')

<div class="row flex-wrap m-4">
    @foreach($movies as $movie)
    <div class="card m-3" style="width: 18rem;">
        <div class="card-body my-4">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
            <p class="card-text"><span>Nazione di produzione: </span>{{ $movie->nationality }}</p>
            <p class="card-text"><span>Data di pubblicazione: </span>{{ $movie->date }}</p>
            <p class="card-text"><span>Media Voto: </span>{{ $movie->vote }}</p>
            <a href="{{ route('movies.show', ['id'=> $movie->id]) }}" class="card-link">Dettagli</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
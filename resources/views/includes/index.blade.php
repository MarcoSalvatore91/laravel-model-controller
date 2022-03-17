@extends("layouts.main")

@section('content')

@foreach($movies as $movie)
<p>{{ $movie->title }}</p>
@endforeach

@endsection
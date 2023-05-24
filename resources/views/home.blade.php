@extends('layouts.app')

@section('content')
    <section class="main text-white py-5">
        <div class=" container">
            <div class="row row-cols-5 gap-3 ba">
                @foreach ($movies as $movie)
                    <div class="card bg-transparent d-flex flex-column justify-content-between border-0 text-center">
                        <img class="card-img-top" src="{{ $movie->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title d-inline-block"><span>Titolo : </span> {{ $movie->title }}</h6>
                            <p class="card-title"><span>Data d'uscita : </span>{{ $movie->date }}</p>
                            <p class="card-title"><span>Voto : </span> {{ $movie->vote }}</p>
                            <a href="#" class="btn btn-primary">Acquista</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

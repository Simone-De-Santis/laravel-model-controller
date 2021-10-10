@extends('layouts.main')
@section('title', ' Movies')
@section('content')
  <section id="homee" class="container text-center">
    <h1>Films caricati nel server</h1>
    <section>




      @forelse($movies as $movie)
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Titile:{{ $movie['title'] }}</h5>
            <p class="card-text">{{ $movie['original_title'] }}</p>
            <p class="card-text">{{ $movie['nationality'] }}</p>
            <p class="card-text">{{ $movie['date'] }}</p>
            <p class="card-text">{{ $movie['vote'] }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        {{-- in caso non sono presenti elementi per ciclare con il forelse --}}
      @empty
        <h2>nessun film trovato</h2>
      @endforelse




    </section>
  </section>

@endsection

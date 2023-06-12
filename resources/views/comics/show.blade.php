@extends('layouts.main')

@section('content')

    <div class="container">
        <h1  class="my-5">Comic detail</h1>


          <div class="card" >
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <p class="card-text">{{$comic->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Prezzo: {{$comic->price}}</li>
              <li class="list-group-item">Data di pubblicazione: {{$comic->sale_date}}</li>
              <li class="list-group-item">Serie: {{$comic->series}}</li>
              <li class="list-group-item">Tipo: {{$comic->type}}</li>
              <li class="list-group-item">Artisti: {{$comic->artists}}</li>
              <li class="list-group-item">Scrittori: {{$comic->writers}}</li>
            </ul>
            <div class="card-body">
              <a href="{{route('comics.index')}}" class="card-link">Torna all'elenco</a>
            </div>
          </div>

    </div>

@endsection

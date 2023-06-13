@extends('layouts.main')

@section('content')
    <div class="container">
        <h1  class="my-5">Modifica {{ $comic->title }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('comics.update',  $comic)}}" method="POST">
            @csrf

            @method('PUT')

            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input
                type="text"
                class="form-control"
                id="title"
                name="title"
                value="{{old('title', $comic->title)}}"
                >
                @error('title')
                    <p class="text-danger"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Descrizione</label>
              <textarea
                class="form-control"
                id="description"
                name="description"
                >
                {{old('description', $comic->description)}}
              </textarea>
                @error('description')
                    <p class="text-danger"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-3">
              <label for="thumb" class="form-label">Path img</label>
              <input
                type="text"
                class="form-control"
                id="thumb"
                name="thumb"
                value="{{old('thumb', $comic->thumb)}}"
                >
                @error('thumb')
                    <p class="text-danger"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-3">
              <label for="price" class="form-label">Prezzo</label>
              <input
                type="text"
                class="form-control"
                id="price"
                name="price"
                value="{{old('price', $comic->price)}}"
                >
                @error('price')
                    <p class="text-danger"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input
                  type="text"
                  class="form-control"
                  id="series"
                  name="series"
                  value="{{old('series', $comic->series)}}"
                  >
                  @error('series')
                      <p class="text-danger"> {{$message}} </p>
                  @enderror
              </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data  di Pubblicazione</label>
                <input
                  type="date"
                  class="form-control"
                  id="sale_date"
                  name="sale_date"
                  value="{{old('sale_date', $comic->sale_date)}}"
                  >
                  @error('sale_date')
                      <p class="text-danger"> {{$message}} </p>
                  @enderror
              </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input
                  type="text"
                  class="form-control"
                  id="type"
                  name="type"
                  value="{{old('type', $comic->type)}}"
                  >
                  @error('type')
                      <p class="text-danger"> {{$message}} </p>
                  @enderror
              </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti (separati da  ", ")</label>
                <input
                  type="text"
                  class="form-control"
                  id="artists"
                  name="artists"
                  value="{{old('artists', $comic->artists)}}"
                  >
                  @error('artists')
                      <p class="text-danger"> {{$message}} </p>
                  @enderror
              </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori (separati da  ", ")</label>
                <input
                  type="text"
                  class="form-control"
                  id="writers"
                  name="writers"
                  value="{{old('writers', $comic->writers)}}"
                  >
                  @error('writers')
                      <p class="text-danger"> {{$message}} </p>
                  @enderror
              </div>

            <button type="submit" class="btn btn-primary">invia</button>
        </form>

    </div>

@endsection

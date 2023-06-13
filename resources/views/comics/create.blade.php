@extends('layouts.main')

@section('content')
    <div class="container">
        <h1  class="my-5">Aggiungi un nuovo fumetto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input
                type="text"
                class="form-control"
                id="title"
                name="title"
                value="{{old('title')}}">
            </div>

            <button type="submit" class="btn btn-primary">invia</button>
        </form>

    </div>

@endsection

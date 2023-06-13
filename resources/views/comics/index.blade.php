@extends('layouts.main')

@section('content')

    <div class="container">
        <h1  class="my-5">Comics selection</h1>

        @if (session('deleted'))

            <div class="alert alert-success" role="alert">
                {{session('deleted')}}
            </div>

        @endif

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">prezzo</th>
                <th scope="col">Data pubblicazione</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic )

                    <tr>
                        <td>{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td><a href="{{route('comics.show', $comic)}}" class="btn btn-success" >Vai</a></td>
                        <td><a href="{{route('comics.edit', $comic)}}" class="btn btn-warning">Modifica</a></td>
                        <td>
                            <form
                              action="{{route('comics.destroy',  $comic)}}"
                              method="POST"
                              class="d-inline"

                              >
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>

                    </tr>

                @endforeach

            </tbody>
          </table>

          <div>
            {{$comics->links()}}
          </div>

    </div>

@endsection

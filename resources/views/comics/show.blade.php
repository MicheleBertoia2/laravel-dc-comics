@extends('layouts.main')

@section('content')

    <div class="container">
        <h1  class="my-5">Comic detail</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">prezzo</th>
                <th scope="col">Data pubblicazione</th>
              </tr>
            </thead>
            <tbody>

                    <tr>
                        <td>{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->sale_date}}</td>
                    </tr>


            </tbody>
          </table>

    </div>

@endsection

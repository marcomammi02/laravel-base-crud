@extends('layouts.base')

@section('content')
    <table class="table table-dark table-hover">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Sale date</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->price }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </table>
@endsection

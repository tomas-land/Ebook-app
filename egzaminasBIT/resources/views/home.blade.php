@extends('layouts.app')

@section('content')
    
        @auth<div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            {{ __('You are logged in!') }} </div>
        @endauth
   
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Pavadinimas</th>
                <th>Puslapių sk.</th>
                <th>ISBN</th>
                <th>Aprašymas</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td>
                        <h5>{{ $book->title }}</h5>
                        <h6>{{ $book->author->name . '  ' . $book->author->surname }}</h6>
                    </td>
                    <td>{{ $book->pages }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{!! $book->description !!}</td>


                </tr>
            @endforeach
        </table>
    </div>

@endsection

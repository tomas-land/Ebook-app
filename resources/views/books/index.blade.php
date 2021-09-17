@extends('layouts.app')
@section('content')
    


<div class="card-body">
    <table class="table">
    <tr>
    <th>Pavadinimas</th>
    <th>Puslapių sk.</th>
    <th>ISBN</th>
    <th>Aprašymas</th>
    <th>Veiksmai</th>
    </tr>
    @foreach ($books as $book)
    <tr>
    <td><h5>{{ $book->title }}</h5>
    <h6>{{ $book->author->name  . '  ' . $book->author->surname }}</h6></td>
    <td>{{ $book->pages }}</td>
    <td>{{ $book->isbn }}</td>
    <td>{!! $book->description !!}</td>
    <td>
        <form action={{ route('books.destroy', $book->id) }} method="POST">
            <a class="btn sm" href={{ route('books.edit', $book->id) }}><i class="fas fa-edit"></i> Redaguoti</a>
            @csrf @method('delete')
            <button type="submit" class="btn sm" value=""><i class="fas fa-trash"></i> Trinti</button>
        </form>
    </tr>
    @endforeach
    </table>
    <div>
    <a href="{{ route('books.create') }}" class="btn btn-success">Pridėti</a>
    </div>
   </div>
   
   <div class="card-body">
    <form class="form-inline" action="{{ route('books.index') }}" method="GET">
        <select name="author_id" id="" class="form-control">
            <option value="" selected disabled>Pasirinkite autoriu:</option>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}" @if ($author->id == app('request')->input('author_id')) selected="selected" @endif>{{ $author->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Filtruoti</button>
        <a class="btn btn-success" href={{ route('books.index') }}>Rodyti visus</a>
    </form>
</div>
@endsection
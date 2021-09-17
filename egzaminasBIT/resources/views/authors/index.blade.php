@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
    <tr>
    <th>Vardas</th>
    <th>Pavarde</th>
    <th >Veiksmai</th>
    </tr>
    @foreach ($authors as $author)
    <tr>
    <td><h5>{{ $author->name }}</h5></td>
    <td><h5>{{ $author->surname }}</h5></td>
    <td>
        <form action={{ route('authors.destroy', $author->id) }} method="POST">
            <a class="btn " href={{ route('authors.edit', $author->id) }}><i class="fas fa-edit"></i> Redaguoti</a>
            @csrf @method('delete')
            <button type="submit" class="btn " value=""><i class="fas fa-trash"></i> Trinti</button>
        </form>
    </tr>
    @endforeach
    </table>
    <div>
    <a href="{{ route('authors.create') }}" class="btn btn-success">Pridėti</a>
    </div>
   </div>
   
@endsection
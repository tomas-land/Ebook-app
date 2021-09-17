@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Redaguoti knygą:</div>
                    <div class="card-body">
                        <form action="{{ route('books.update',$book->id) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label>Pavadinimas: </label>
                                <input type="text" name="title" class="form-control" value="{{ $book->title }}">
                                @error('title')
                                    <div class="alert ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Puslapių sk.: </label>
                                <input type="number" name="pages" class="form-control" value="{{ $book->pages }}">
                                @error('pages')
                                    <div class="alert ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>ISBN: </label>
                                <input type="number" name="isbn" class="form-control" value="{{ $book->isbn }}">
                                @error('isbn')
                                    <div class="alert ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pasirinkite autoriu: </label>
                                <select name="author_id" id="" class="form-control">
                                    <option value="{{$book->author->id}}" selected >{{$book->author->name}}</option>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>
                                @error('author_id')
                                    <div class="alert ">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>Aprašymas: </label>
                                <textarea id="mce" name="description" rows=10 cols=100 class="form-control" value="">{{ $book->description }}</textarea>
                                @error('description')
                                    <div class="alert ">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

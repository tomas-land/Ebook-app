
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Redaguoti autoriu:</div>
                    <div class="card-body">
                        <form action="{{ route('authors.update',$author->id) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label>Vardas: </label>
                                <input type="text" name="name" class="form-control" value="{{ $author->name }}">
                                @error('name')
                                    <div class="alert ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pavardė: </label>
                                <input type="text" name="surname" class="form-control" value="{{ $author->surname }}">
                                @error('surname')
                                    <div class="alert ">{{ $message }}</div>
                                @enderror
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Redaguoti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



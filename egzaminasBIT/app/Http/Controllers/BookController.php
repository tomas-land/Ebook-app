<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (isset($request->author_id) && $request->author_id !== 0)
            $books = \App\Models\Book::where('author_id', $request->author_id)->orderBy('title')->get();
        else
            $books = \App\Models\Book::orderBy('title')->get();

        $authors = Author::orderBy('name')->get();
        return view('books.index', ['books' => $books, 'authors' => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::orderBy('name')->get();
        return view('books.create', ['authors' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:books|max:50',
            'pages' => 'required|gt:0',
            'isbn' => 'required|gt:0',
            'description' => 'required|max:200',
            'author_id' => 'required'

        ]);

        $book = new Book();
        $book->fill($request->all());

        return ($book->save() !== 1) ?
            redirect()->route('books.index')->with('status_success', "Knyga pridėta!") :
            redirect()->route('books.index')->with('status_error', "Klaida!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $authors = Author::orderBy('name')->get();
        return view('books.edit', ['book' => $book, 'authors' => $authors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validate($request, [
            'title' => 'required|unique:books,title,' . $book->id . ',id|max:50',
            'pages' => 'required|gt:0',
            'isbn' => 'required|gt:0',
            'description' => 'required|max:200',
            'author_id' => 'required'

        ]);

        $book->fill($request->all());

        return ($book->save() !== 1) ?
            redirect()->route('books.index')->with('status_success', "Knyga: {$request->title}  redaguota!") :
            redirect()->route('books.index')->with('status_error', "Klaida!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}

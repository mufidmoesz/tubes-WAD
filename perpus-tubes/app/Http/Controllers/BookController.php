<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //

    public function index()
    {
        $books = Book::all()->with('authors', 'publishers');
        return view('admin.book.index', compact('books'));
    }

    public function create()
    {
        return view('admin.book.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'year_released' => 'required',
            'description' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg|max:2048',
            'isbn' => 'required|unique',
            'publisher_id' => 'exists:publishers,publisher_id',
            'authors' => 'array',
            'authors.*' => 'exists:authors,author_id',
            'categories' => 'array',
            'categories.*' => 'exists:categories,category_id'
        ]);

        $cover = $request->file('cover');
        $coverName = time() . '.' . $cover->extension();
        $cover->move(public_path('img'), $coverName);

        Book::create([
            'title' => $request->title,
            'year_released' => $request->year_released,
            'description' => $request->description,
            'cover' => $coverName,
            'isbn' => $request->isbn,
            'publisher_id' => $request->publisher_id
        ]);

        $authors = $request->get('authors');
        $categories = $request->get('categories');
        $book = Book::latest()->first();
        $book->authors()->attach($authors);
        $book->categories()->attach($categories);
        return redirect('admin.book.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('admin.book.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:books,title,' . $id . ',book_id',
            'year_released' => 'required',
            'description' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg|max:2048',
            'isbn' => 'required|unique:books,isbn,' . $id . ',book_id',
            'publisher_id' => 'exists:publishers,publisher_id',
            'authors' => 'array',
            'authors.*' => 'exists:authors,author_id',
            'categories' => 'array',
            'categories.*' => 'exists:categories,category_id'
        ]);

        $book = Book::find($id);
        $book->update([
            'title' => $request->title,
            'year_released' => $request->year_released,
            'description' => $request->description,
            'isbn' => $request->isbn,
            'publisher_id' => $request->publisher_id
        ]);

        $authors = $request->get('authors');
        $categories = $request->get('categories');
        $book->authors()->sync($authors);
        $book->categories()->sync($categories);
        return redirect()->route('admin.book.index')->with('success', 'Buku berhasil diupdate!');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->authors()->detach();
        $book->delete();

        return redirect()->route('admin.book.index')->with('success', 'Buku berhasil dihapus!');
    }

    public function show($id)
    {
        $book = Book::find($id)->with('authors', 'publishers')->findOrFail($id);
        return view('admin.book.show', compact('book'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\BookAuthor;
use App\Models\BookCategory;
use App\Models\Publisher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; // Import the Str class

class BookController extends Controller
{
    //

    public function index()
    {
        $books = Book::all();

        foreach($books as $book) {
            $bookIds[] = $book->book_id;

        }
        $authorIds = BookAuthor::whereIn('book_id', $bookIds)->get();
        $authors = Author::all();

        $categoryIds = BookCategory::whereIn('book_id', $bookIds)->get();
        $categories = Category::all();
        return view('admin.book.index', compact(['books', 'authorIds', 'authors', 'categoryIds', 'categories']));
    }

    public function homeIndex()
    {
        $books = Book::all();

        foreach($books as $book) {
            $bookIds[] = $book->book_id;

        }
        $authorIds = BookAuthor::whereIn('book_id', $bookIds)->get();
        $authors = Author::all();

        $categoryIds = BookCategory::whereIn('book_id', $bookIds)->get();
        $categories = Category::all();
        return view('home', compact(['books', 'authorIds', 'authors', 'categoryIds', 'categories']));
    }

    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('admin.book.create', compact('authors', 'categories', 'publishers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'year_released' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'authors' => 'required|array',
            'authors.*' => 'exists:authors,author_id', // Validation for a multi-select field
            'publisher_id' => 'required|exists:publishers,publisher_id',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,category_id', // Validation for a multi-select field
            'isbn' => 'required|unique:books',
        ]);
        // dd($request);
        $cover = $request->file('cover');

        $coverName = Str::uuid()->toString() . '.' . $cover->extension(); // Use the Str class to generate a unique cover name

        $cover->move(public_path('img'), $coverName);

        Book::create([
            'title' => $request->title,
            'year_released' => $request->year_released,
            'description' => $request->description,
            'cover' => $coverName,
            'isbn' => $request->isbn,
            'publisher_id' => $request->publisher_id
        ]);

        //save the author_id and category_id to their respective pivot table
        $book_id = DB::getPdo()->lastInsertId(); //get the last inserted id from books table
        $authors = $request->get('authors');
        $categories = $request->get('categories');
        $book = Book::find($book_id);
        $book->author()->attach($authors);
        $book->category()->attach($categories);


        //send book_id which just created to BookAuthorController
        return redirect()->route('admin.book.index')->with('success', 'Buku berhasil ditambahkan!');
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
        $book = Book::findOrFail($id);

        $authorId = BookAuthor::where('book_id', $book->book_id)->pluck('author_id');
        $authorName = Author::whereIn('author_id', $authorId)->pluck('name');

        $categoryId = BookCategory::where('book_id', $book->book_id)->pluck('category_id');
        $categoryName = Category::whereIn('category_id', $categoryId)->pluck('category_name');

        $publisherName = Publisher::where('publisher_id', $book->publisher_id)->value('publisher_name');

        return view('admin.book.show', compact('book', 'authorName', 'categoryName', 'publisherName'));
    }
}

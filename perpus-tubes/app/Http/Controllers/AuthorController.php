<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    //
    protected $model;

    public function __construct(Author $author)
    {
        $this->model = $author;
    }

    public function index()
    {
        $authors = Author::all();
        return view('admin.author.index', compact('authors'));
    }

    public function create()
    {
        return view('admin.author.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:authors',
            'birth_date' => 'required|date',
            'about_author' => 'required'
        ]);

        Author::create([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'about_author' => $request->about_author
        ]);

        return redirect()->route('admin.author.index')->with('success', 'Author berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $author = Author::find($id);
        return view('admin.author.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'author_name' => 'required',
            'birth_date' => 'required|date',
            'about_author' => 'required'
        ]);
        $author = Author::find($id);
        // dd($author);

        if (!$author) {
            return redirect()->route('admin.author.index')->with('error', 'Author not found.');
        }

        $author->name = $request->author_name;
        $author->birth_date = $request->birth_date;
        $author->about_author = $request->about_author;
        $author->save();

        return redirect()->route('admin.author.index')->with('success', 'Author berhasil diupdate!');
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->books()->detach();
        $author->delete();

        return redirect()->route('admin.author.index')->with('success', 'Author berhasil dihapus!');
    }

    public function show($id)
    {
        $author = Author::find($id)->with('books')->findOrFail($id);
        return view('admin.author.show', compact('author'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    //
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
            'about_author' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $photo = $request->file('photo');
        $photoName = time() . '.' . $photo->extension();
        $photo->move(public_path('img'), $photoName);

        Author::create([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'about_author' => $request->about_author,
            'photo' => $photoName
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
            'name' => 'required|unique:authors,name,' . $id . ',author_id',
            'birth_date' => 'required|date',
            'about_author' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $author = Author::find($id);

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->extension();
            $photo->move(public_path('img'), $photoName);
            $author->photo = $photoName;
        }

        $author->name = $request->name;
        $author->birth_date = $request->birth_date;
        $author->about_author = $request->about_author;
        $author->save();

        return redirect()->route('admin.author.index')->with('success', 'Author berhasil diupdate!');
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();

        return redirect()->route('admin.author.index')->with('success', 'Author berhasil dihapus!');
    }
}

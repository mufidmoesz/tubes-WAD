<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    //
    protected $model;
    public function __construct(Publisher $publisher)
    {
        $this->model = $publisher;
    }

    public function index()
    {
        $publishers = Publisher::all();
        return view('admin.publisher.index', compact('publishers'));
    }

    public function create()
    {
        return view('admin.publisher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'publisher_name' => 'required|unique:publishers',
            'publisher_address' => 'required',
            'publisher_phone' => 'required',
            'publisher_email' => 'required|email',
            'publisher_website' => 'required'
        ]);

        Publisher::create([
            'publisher_name' => $request->publisher_name,
            'publisher_address' => $request->publisher_address,
            'publisher_phone' => $request->publisher_phone,
            'publisher_email' => $request->publisher_email,
            'publisher_website' => $request->publisher_website
        ]);

        return redirect()->route('admin.publisher.index')->with('success', 'Publisher berhasil ditambahkan!');
    }

    public function show($id)
    {
        $publisher = Publisher::find($id)->with('books')->findOrFail($id);
        return view('admin.publisher.show', compact('publisher'));
    }

    public function edit($id)
    {
        $publisher = Publisher::find($id);
        return view('admin.publisher.edit', compact('publisher'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'publisher_name' => 'required|unique:publishers,publisher_name,' . $id . ',publisher_id',
            'publisher_address' => 'required',
            'publisher_phone' => 'required',
            'publisher_email' => 'required|email',
            'publisher_website' => 'required'
        ]);

        $publisher = Publisher::find($id);
        $publisher->update([
            'publisher_name' => $request->publisher_name,
            'publisher_address' => $request->publisher_address,
            'publisher_phone' => $request->publisher_phone,
            'publisher_email' => $request->publisher_email,
            'publisher_website' => $request->publisher_website
        ]);

        return redirect()->route('admin.publisher.index')->with('success', 'Publisher berhasil diupdate!');
    }

    public function destroy($id)
    {
        $publisher = Publisher::find($id);
        $publisher->delete();
        return redirect()->route('admin.publisher.index')->with('success', 'Publisher berhasil dihapus!');
    }
}

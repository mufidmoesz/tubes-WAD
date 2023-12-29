@extends('layouts.layoutdash')

@section('content')
<div class="container mt-custom-6">
    <h1>Tambah Buku</h1>
    <form action="{{ route('admin.book.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul Buku">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Buku</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Masukkan Deskripsi Buku"></textarea>
        </div>
        <div class="mb-3">
            <label for="year_released" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" id="year_released" name="year_released" placeholder="Masukkan Tahun Terbit">
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Cover</label>
            <input class="form-control" type="file" id="cover" name="cover">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Penulis</label>
            <select class="form-select" multiple aria-label="Multiple select example" name="authors[]">
                <option selected>Pilih Penulis</option>
                @foreach ($authors as $author)
                <option value="{{ $author->author_id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Penerbit</label>
            <select class="form-select" aria-label="Default select example" name="publisher_id">
                <option selected>Pilih Penerbit</option>
                @foreach ($publishers as $publisher)
                <option value="{{ $publisher->publisher_id }}">{{ $publisher->publisher_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" multiple aria-label="Multiple select example" name="categories[]">
                <option selected>Pilih Kategori</option>
                @foreach ($categories as $category)
                <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Masukkan ISBN">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Tambah Buku</button>
    </form>
</div>
@endsection

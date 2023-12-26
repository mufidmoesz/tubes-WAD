@extends('layouts.layoutdash')

@section('content')
<div class="container">
    <form action="{{ route('admin.book.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul Buku">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Penulis</label>
            <select class="form-select" aria-label="Default select example" name="author_id">
                <option selected>Pilih Penulis</option>
                @foreach ($authors as $author)
                <option value="{{ $author->author_id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <option selected>Pilih Kategori</option>
                @foreach ($categories as $category)
                <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Buku</button>
    </form>
</div>
@endsection

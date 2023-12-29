@extends('layouts.layoutdash')

@section('content')
<div class="container">
    <form action="/admin/book/{{ $book->book_id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Use the PUT method for updates -->

        <div class="mb-3">
            <label for="title" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul Buku" value="{{ $book->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Buku</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Masukkan Deskripsi Buku">{{ $book->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="year_released" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" id="year_released" name="year_released" placeholder="Masukkan Tahun Terbit" value="{{ $book->year_released }}">
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Cover</label>
            <input class="form-control" type="file" id="cover" name="cover">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Penulis</label>
            <select class="form-select" multiple aria-label="Multiple select example" name="authors[]">
                @foreach ($authors as $author)
                <option value="{{ $author->author_id }}" {{ in_array($author->author_id, $book->author->pluck('author_id')->toArray()) ? 'selected' : '' }}>
                    {{ $author->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Penerbit</label>
            <select class="form-select" aria-label="Default select example" name="publisher_id">
                @foreach ($publishers as $publisher)
                <option value="{{ $publisher->publisher_id }}" {{ $publisher->publisher_id == $book->publisher_id ? 'selected' : '' }}>
                    {{ $publisher->publisher_name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" multiple aria-label="Multiple select example" name="categories[]">
                @foreach ($categories as $category)
                <option value="{{ $category->category_id }}" {{ in_array($category->category_id, $book->category->pluck('category_id')->toArray()) ? 'selected' : '' }}>
                    {{ $category->category_name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Masukkan ISBN" value="{{ $book->isbn }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Buku</button>
    </form>

</div>
@endsection

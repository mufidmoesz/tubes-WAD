@extends('layouts.layoutdash')

@section('content')
<div class="container">
    <h2>Edit Author</h2>
    <form action="/admin/author/{{ $author->author_id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="author_name">Author Name:</label>
            <input type="text" class="form-control" id="author_name" name="author_name" value="{{ $author->name }}" required>
        </div>

        <div class="mb-3">
            <label for="birth_date">Birth Date:</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ \Carbon\Carbon::parse($author->birth_date)->format('Y-m-d') }}">
        </div>

        <div class="mb-3">
            <label for="author_address">About Author:</label>
            <textarea class="form-control" id="about_author" name="about_author" rows="3">{{ $author->about_author }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Author</button>
    </form>
@endsection

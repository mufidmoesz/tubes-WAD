@extends('layouts.layoutdash')

@section('content')
<div class="container mt-custom-5">
    <h2>Add New Author</h2>
    <form action="/admin/author" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name">Author Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="birth_date">Birth Date:</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date">
        </div>

        <div class="mb-3">
            <label for="author_address">About Author:</label>
            <textarea class="form-control" id="about_author" name="about_author" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Add Author</button>
    </form>
</div>
@endsection

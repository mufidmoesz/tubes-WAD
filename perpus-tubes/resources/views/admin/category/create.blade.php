@extends('layouts.layoutdash')

@section('content')
<div class="container mt-custom-5">
    <h2>Add New Category</h2>
    <form action="/admin/category" method="POST">
        @csrf

        <div class="form-group">
            <label for="category_name">Category Name:</label>
            <input type="text" class="form-control" id="category_name" name="category_name" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Add Category</button>
    </form>
</div>
@endsection

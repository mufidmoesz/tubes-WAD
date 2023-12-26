@extends('layouts.layoutdash')

@section('content')
<div class="container">
    <h2>Edit Category</h2>
    <form action="" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="category_name">Category Name:</label>
            <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $category->category_name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
</div>
@endsection

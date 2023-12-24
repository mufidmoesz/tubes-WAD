@extends('layouts.layoutdash')

@section('content')
<div class="container">
    <h2>Edit Publisher</h2>
    <form action="{{ route('publishers.update', $publisher->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="publisher_name">Publisher Name:</label>
            <input type="text" class="form-control" id="publisher_name" name="publisher_name" value="{{ $publisher->publisher_name }}" required>
        </div>

        <div class="form-group">
            <label for="publisher_phone">Phone:</label>
            <input type="text" class="form-control" id="publisher_phone" name="publisher_phone" value="{{ $publisher->publisher_phone }}">
        </div>

        <div class="form-group">
            <label for="publisher_address">Address:</label>
            <input type="text" class="form-control" id="publisher_address" name="publisher_address" value="{{ $publisher->publisher_address }}">
        </div>

        <div class="form-group">
            <label for="publisher_email">Email:</label>
            <input type="email" class="form-control" id="publisher_email" name="publisher_email" value="{{ $publisher->publisher_email }}">
        </div>

        <div class="form-group">
            <label for="publisher_website">Website:</label>
            <input type="text" class="form-control" id="publisher_website" name="publisher_website" value="{{ $publisher->publisher_website }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

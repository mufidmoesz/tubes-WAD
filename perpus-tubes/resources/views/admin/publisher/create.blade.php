@extends('layouts.layoutdash')

@section('content')
<div class="container">
    <h2>Add New Publisher</h2>
    <form action="{{ route('publishers.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="publisher_name">Publisher Name:</label>
            <input type="text" class="form-control" id="publisher_name" name="publisher_name" required>
        </div>

        <div class="form-group">
            <label for="publisher_phone">Phone:</label>
            <input type="text" class="form-control" id="publisher_phone" name="publisher_phone">
        </div>

        <div class="form-group">
            <label for="publisher_address">Address:</label>
            <input type="text" class="form-control" id="publisher_address" name="publisher_address">
        </div>

        <div class="form-group">
            <label for="publisher_email">Email:</label>
            <input type="email" class="form-control" id="publisher_email" name="publisher_email">
        </div>

        <div class="form-group">
            <label for="publisher_website">Website:</label>
            <input type="text" class="form-control" id="publisher_website" name="publisher_website">
        </div>

        <button type="submit" class="btn btn-primary">Add Publisher</button>
    </form>
</div>
@endsection

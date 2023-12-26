@extends('layouts.layoutdash')

@section('content')
<div class="container">
    <h2>Publishers</h2>
    <table class="table table-bordered shadow">
        <thead>
            <tr>
                <th>#</th>
                <th>Publisher Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>Website</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publishers as $index => $publisher)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $publisher->publisher_name }}</td>
                    <td>{{ $publisher->publisher_phone }}</td>
                    <td>{{ $publisher->publisher_address }}</td>
                    <td>{{ $publisher->publisher_email }}</td>
                    <td>{{ $publisher->publisher_website }}</td>
                    <td>
                        <a href="/admin/publisher/{{$publisher->publisher_id}}/edit" class="btn btn-warning">Update</a>
                        <form action="/admin/publisher/{{$publisher->publisher_id}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

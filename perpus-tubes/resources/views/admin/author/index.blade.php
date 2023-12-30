@extends('layouts.layoutdash')

@section('content')
<div class="container-xxl custom-home mt-3">
    <h2>Authors</h2>
    <div style="text-align: right; margin-top: 10px;">
        <a href="/admin/author/create" class="btn btn-dark gradient-custom-2 mb-2"><i class="bi bi-plus-lg"></i></a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Birth Date</th>
                <th>About Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $index => $author)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ date('d F Y', strtotime($author->birth_date)) }}</td>
                    <td style="width: 700px;">{{ $author->about_author }}</td>
                    <td>
                        <a href="/admin/author/{{ $author->author_id }}/edit" class="btn btn-warning btn-sm">Update</a>
                        <form action="/admin/author/{{ $author->author_id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Add New Author Button -->

</div>
@endsection

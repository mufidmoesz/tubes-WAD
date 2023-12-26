@extends('layouts.layoutdash')

@section('content')
<div class="container mt-5">
    <h4>All Books</h4>
            <table class="table table-bordered shadow">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $book->title }}</td>
                        <td>
                            @foreach($authorIds as $authorId)
                                @if($authorId->book_id == $book->book_id)
                                    @foreach($authors as $author)
                                        @if($author->author_id == $authorId->author_id)
                                            {{ $author->name }}
                                            <br>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $book->description }}</td>
                        <td>
                            @php
                                $categoryNames = [];
                            @endphp
                            @foreach($categoryIds as $categoryId)
                                @if($categoryId->book_id == $book->book_id)
                                    @foreach($categories as $category)
                                        @if($category->category_id == $categoryId->category_id)
                                            @php
                                                $categoryNames[] = $category->category_name
                                            @endphp
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                            {{ implode(', ', $categoryNames) }}
                        </td>
                        <td>
                            <a href="/admin/book/{{ $book->book_id }}" class="btn btn-primary">Detail</a>
                            <a href="/admin/book/{{ $book->book_id }}/edit" class="btn btn-warning">Edit</a>
                            <form action="/admin/book/{{ $book->book_id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        </table>
</div>
@endsection

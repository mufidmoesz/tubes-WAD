@extends('layouts.layoutdash')

@section('content')
<div class="container-xxl custom-home mt-4">
    <h2>All Books</h2>
    <div style="text-align: right; margin-top: 10px;">
        <a href="/admin/book/create" class="btn btn-dark gradient-custom-2 mb-2"><i class="bi bi-plus-lg"></i></a>
    </div>
            <table class="table table-bordered shadow mb-4">
                <thead>
                    <tr>
                        <th>#</th>
                        <th style="width: 180px;">Title</th>
                        <th>Author</th>
                        <th style="width: 600px;">Description</th>
                        <th>Category</th>
                        <th style="width: 120px;">Action</th>
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
                        <td class="mx-auto">
                            <a href="/admin/book/{{ $book->book_id }}/show" class="btn btn-primary mb-1">Detail</a>
                            <a href="/admin/book/{{ $book->book_id }}/edit" class="btn btn-warning mb-1">Edit</a>
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

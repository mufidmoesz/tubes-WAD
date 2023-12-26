@extends('layouts.layoutdash')

@section('content')
<div class="container">
    <h2>Categories</h2>
    <table class="table table-bordered shadow">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($categories as $category)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Update</a>
                        {{-- <a href="/admin/category/{{ $category->category_id }}" class="btn btn-danger btn-sm" onclick="alert('Are you sure?')">Delete</a> --}}
                        <form action="/admin/category/{{ $category->category_id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Add New Category Button -->
    <div style="text-align: left; margin-top: 10px;">
        <a href="" class="btn btn-success">Add New Category</a>
    </div>
</div>
@endsection

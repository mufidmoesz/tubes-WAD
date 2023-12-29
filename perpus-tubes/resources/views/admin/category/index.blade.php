@extends('layouts.layoutdash')
<style>
    .table{
        table-layout: auto;
    }
</style>
@section('content')
<div class="container-xxl custom-home mt-3">
    <h2>Categories</h2>
    <div style="text-align: right; margin-top: 10px;">
        <a href="" class="btn btn-success mb-1">Add Category</a>
    </div>
    <table class="table ">
        <thead>
            <tr>
                <th style="width: 100px;">ID</th>
                <th>Category Name</th>
                <th style="width: 150px;">Action</th> <!-- Set the width here -->
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($categories as $category)
                <tr>
                    <td style="width: 100px;">{{ $no++ }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td style="width: 150px;"> <!-- Set the width here for each row -->
                        <a href="/admin/category/{{$category->category_id}}/edit" class="btn btn-warning btn-sm">Update</a>
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
</div>
@endsection

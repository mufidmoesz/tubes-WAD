@extends('layouts.layoutdash')

@section('content')
<style>
    .figure {
        height: 700px
    }
    .figure-img {
        height: 384px;
        object-fit: cover;
    }
</style>
<div class="container mt-4 shadow">
    <div class="row">
        <div class="col-md-6 mt-4 mb-4">
            <img src="/img/{{ $book->cover }}" class="rounded mx-auto d-block" alt="..." height="500px" width="325px">
        </div>
        <div class="col-md-6">
            <h3 class="mt-4">{{ $book->title }}</h3>
            <p class="mt-4">{{ $book->description }}</p>
            <p class="mt-4">Author : {{ $authorName->implode(', ') }}</p>
            <p class="mt-4">Category : {{ $categoryName->implode(', ') }}</p>
            <p class="mt-4">Year Released : {{ $book->year_released }}</p>
            <p class="mt-4">Publisher : {{ $publisherName }}</p>
            <p class="mt-4">ISBN : {{ $book->isbn }}</p>
        </div>
    </div>
</div>
@endsection

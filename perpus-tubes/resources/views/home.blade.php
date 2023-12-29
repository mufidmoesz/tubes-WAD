@extends('layouts.layouthome')
@extends('layouts.navbarhome')

@section('content')
<style>
    .card {
        height: 700px
    }
    .card-body2 {
        height: 100px;
        display: flex !important;
        justify-content: center;
    }
    .card-body2 a {
        margin-top: 20px;
        height: 40px;
    }
    .card-img-top {
        height: 384px;
        object-fit: cover;
    }
</style>
<section>
    <div class="container-xxl custom-home">
        <h2 class="mt-5 ">Books</h2>
        <div class="row">
        @foreach($books as $book)
        <div class="col-md-3 mb-4">
            <div class="card mt-3" style="width: 15rem;">
                <img src="/img/{{ $book->cover }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                </div>
                <div class="overflow-auto">
                    <p class="card-text">{{ $book->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Author :
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
                    </li>
                    <li class="list-group-item">Category :
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
                    </li>
                </ul>
                <div class="card-body2 mb-3">
                    <a href="/book/{{ $book->book_id }}/show" class="btn btn-primary">Lihat Buku</a>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</section>
@endsection

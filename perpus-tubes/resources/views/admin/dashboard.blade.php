@extends('layouts.layoutdash')

@section('content')
<style>
    .card-img-top {
        height: 100px;
        width: 100px;
    }
    .pcard{
        padding-top: 30px;
        padding-left: 40px;
    }

    .card{
        justify-content: center;
    }
</style>
<div class="mx-custom mt-custom-6">
    <div class="row shadow pcard">
        <h3 class="mb-4"style="text-align: center;">Dashboard Menu</h3>
        <div class="col-md-3 mb-4" style="justify-content: center;">
            <div class="card " style="width: 10rem;">
                <a href="/admin/category" class="mx-auto">
                <img  src="/asset/CategoryIcon.png" class="card-img-top mx-auto" alt="">
                </a>
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Category</h5>
                    <p class="card-text">View all the category</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 10rem;">
                <a href="/admin/book" class="mx-auto">
                <img  src="/asset/CategoryIcon.png" class="card-img-top mx-auto" alt="">
                </a>
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Book</h5>
                    <p class="card-text">View all the category</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 10rem;">
                <a href="/admin/publisher" class="mx-auto">
                <img  src="/asset/CategoryIcon.png" class="card-img-top mx-auto" alt="">
                </a>
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Publisher</h5>
                    <p class="card-text">View all the category</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 10rem;">
                <a href="/admin/author" class="mx-auto">
                <img  src="/asset/CategoryIcon.png" class="card-img-top mx-auto" alt="">
                </a>
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Author</h5>
                    <p class="card-text">View all the category</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my Posts</a>
            <a href="" class="btn btn-warning"><span data-feather="arrow-left"></span> Edit </a>
            <a href="" class="btn btn-danger"><span data-feather="arrow-left"></span> Delete </a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->kategori->name }}" class="img-fluid mt-3" alt="{{ $post->kategori->name }}">
                

            <article class="my-3 fs-5">
                {!! $post->body !!}         {{--  Blasde excape charakter == untuk menampilkan data yang memeiliki tag HTML  --}}
            </article>

                
        </div>
    </div>
</div>

@endsection
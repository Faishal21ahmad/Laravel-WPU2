@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="arrow-left"></span> Edit </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Tenan Ameh Ndelete ?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid" alt="{{ $post->kategori->name }}">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->kategori->name }}" class="img-fluid" alt="{{ $post->kategori->name }}">
            @endif
                
            <article class="my-3 fs-5">
                {!! $post->body !!}         {{--  Blasde excape charakter == untuk menampilkan data yang memeiliki tag HTML  --}}
            </article>

                
        </div>
    </div>
</div>

@endsection
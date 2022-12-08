@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post Kategoris</h1>    
    

    <div class="container">
        <div class="row">
            @foreach($kategoris as $kategori)
            <div class="col-md-4">
                <a href="/posts?kategori={{ $kategori->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x400?{{ $kategori->name }}" class="card-img" alt="{{ $kategori->name }}">
                        <div class="card-img-overlay d-flex align-items-center">
                            <h5 class="card-title">{{ $kategori->name }}</h5>
                        
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>



@endsection

{{-- 
// $post["id"] == notasi array
// $post->id == notasi object 
--}}
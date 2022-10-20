@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post Kategoris</h1>    

    @foreach ($kategoris as $kategori)

    <ul>
        <li>
            <h2>
                <a href="/kategoris/{{ $kategori->slug }}">{{ $kategori->name }}</a>
            </h2>
        </li>
    </ul>





      
    @endforeach

@endsection

{{-- 
// $post["id"] == notasi array
// $post->id == notasi object 
--}}
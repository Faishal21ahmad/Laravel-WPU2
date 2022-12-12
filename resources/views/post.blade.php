@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5">{{ $post->title }}</h1>
                    <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none" >{{ $post->author->name }}</a> in <a href="/posts?kategori={{ $post->kategori->slug }}" class="text-decoration-none">{{ $post->kategori->name }}</a></p>
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

                    <a href="/posts" class="text-decoration-none d-block mt-4"> <- Back to Posts</a>
            </div>
        </div>
    </div>





    

@endsection 
{{-- 




Post::create([
    'title' => 'Judul Ke Empat',
    'slug' => 'judul-ke-empat',
    'excerpt' => 'Lorem ipsum 4',
    'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi natus possimus rerum. Delectus quasi officiis, repellat, voluptates molestias alias nostrum quae aspernatur cumque similique dicta nihil, itaque iusto? Ipsum, nesciunt, nobis minima laboriosam aspernatur molestiae quo odio incidunt voluptatum assumenda quod neque recusandae adipisci alias enim reprehenderit cupiditate ipsa, delectus amet sit expedita? Reiciendis, quidem repellendus modi asperiores, dolore obcaecati repudiandae corrupti minus nesciunt nobis cupiditate neque dolores ipsum quisquam eaque assumenda impedit iure voluptates? Architecto impedit molestiae libero soluta voluptate? Ipsa iusto aspernatur cumque dignissimos praesentium ex, culpa nam voluptatem quasi illo in nemo ducimus voluptas veritatis? Vitae, aut similique optio officiis voluptatem perferendis at beatae, molestiae exercitationem officia, dolor mollitia inventore velit! Est explicabo cum quia asperiores cupiditate, repellat ea voluptatem velit in.</p> <p>Ab reprehenderit laborum, dolor suscipit exercitationem molestias neque iste dignissimos commodi sint est esse. Voluptate, aperiam? Consequatur neque labore officia qui obcaecati ut reprehenderit consequuntur pariatur repellendus reiciendis quaerat totam provident eveniet repellat officiis eligendi accusantium, itaque sunt nisi molestiae, eius dignissimos quam. Incidunt, recusandae quisquam commodi inventore in quidem vitae quo quasi ipsam ea, molestiae tempora adipisci, eum repudiandae odit laboriosam consequuntur. Dignissimos, dolor expedita? Praesentium expedita nobis quibusdam distinctio magni mollitia magnam atque? </p><p>lorem50 </p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, aliquam ad. Quisquam praesentium vero blanditiis eveniet officia quod in corporis nesciunt optio. Debitis incidunt obcaecati aliquid dolore minus quia eius quod earum ab error inventore, ea natus quas pariatur doloremque molestias velit? Nobis dolor impedit dignissimos nam repellendus? Tenetur, soluta.</p>'
])
--}}

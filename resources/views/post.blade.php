@extends('layouts.main')
@section('container')

    <h1 class="mb-5">{{ $post->title }}</h1>
    <p>By. Faishalbahy in <a href="/kategoris/{{ $post->kategori->slug }}">{{ $post->kategori->name }}</a></p>

    {!! $post->body !!}         {{--  Blasde excape charakter == untuk menampilkan data yang memeiliki tag HTML  --}}

    <a href="/blog">Back to Posts</a>

@endsection 
{{-- 




Post::create([
    'title' => 'Judul Ke Empat',
    'slug' => 'judul-ke-empat',
    'excerpt' => 'Lorem ipsum 4',
    'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi natus possimus rerum. Delectus quasi officiis, repellat, voluptates molestias alias nostrum quae aspernatur cumque similique dicta nihil, itaque iusto? Ipsum, nesciunt, nobis minima laboriosam aspernatur molestiae quo odio incidunt voluptatum assumenda quod neque recusandae adipisci alias enim reprehenderit cupiditate ipsa, delectus amet sit expedita? Reiciendis, quidem repellendus modi asperiores, dolore obcaecati repudiandae corrupti minus nesciunt nobis cupiditate neque dolores ipsum quisquam eaque assumenda impedit iure voluptates? Architecto impedit molestiae libero soluta voluptate? Ipsa iusto aspernatur cumque dignissimos praesentium ex, culpa nam voluptatem quasi illo in nemo ducimus voluptas veritatis? Vitae, aut similique optio officiis voluptatem perferendis at beatae, molestiae exercitationem officia, dolor mollitia inventore velit! Est explicabo cum quia asperiores cupiditate, repellat ea voluptatem velit in.</p> <p>Ab reprehenderit laborum, dolor suscipit exercitationem molestias neque iste dignissimos commodi sint est esse. Voluptate, aperiam? Consequatur neque labore officia qui obcaecati ut reprehenderit consequuntur pariatur repellendus reiciendis quaerat totam provident eveniet repellat officiis eligendi accusantium, itaque sunt nisi molestiae, eius dignissimos quam. Incidunt, recusandae quisquam commodi inventore in quidem vitae quo quasi ipsam ea, molestiae tempora adipisci, eum repudiandae odit laboriosam consequuntur. Dignissimos, dolor expedita? Praesentium expedita nobis quibusdam distinctio magni mollitia magnam atque? </p><p>lorem50 </p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, aliquam ad. Quisquam praesentium vero blanditiis eveniet officia quod in corporis nesciunt optio. Debitis incidunt obcaecati aliquid dolore minus quia eius quod earum ab error inventore, ea natus quas pariatur doloremque molestias velit? Nobis dolor impedit dignissimos nam repellendus? Tenetur, soluta.</p>'
])




 --}}

 
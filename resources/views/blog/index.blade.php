@extends('layouts.master')

@section('leftbar_content')
    <h2>The New Stuff</h2>

    @forelse($posts as $post)
        <div class="single_stuff wow fadeInDown">
            <div class="single_stuff_img"> <a href="{{ route('blog.post.show', ['id' => $post->id]) }}"><img src="{{ url('images/' . $post->image) }}" alt=""></a> </div>
            <div class="single_stuff_article">
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">{{ $post->category->name }}</a>
                    <div class="stuff_article_inner"> <span class="stuff_date">Nov <strong>17</strong></span>
                        <h2><a href="{{ route('blog.post.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h2>
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p>No posts found!</p>
    @endforelse

    <div class="stuffpost_paginatinonarea wow slideInLeft">
        {{ $posts->links() }}
    </div>
@endsection

@section('tags')
    <ul class="poplr_tagnav">
        @foreach($tags as $tag)
            <li><a href="{{ route('blog.post.tag', ['id' => $tag->id]) }}">{{ $tag->name }}({{$tag->posts_count}})</a></li>
        @endforeach
    </ul>
@endsection

@section('categories')
    <ul class="poplr_catgnva">
        @foreach($categories as $category)
            <li><a href="#">{{ $category->name }}</a></li>
        @endforeach
    </ul>
@endsection
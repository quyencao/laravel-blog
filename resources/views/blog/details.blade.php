@extends('layouts.master')

@section('leftbar_content')
    <div class="singlepost_area">
        <div class="singlepost_content"> <a href="#" class="stuff_category">Technology</a> <span class="stuff_date">Nov <strong>17</strong></span>
            <h2><a href="#">{{ $post->title }}</a></h2>
            <img class="img-center img-responsive" src="{{ url('images/' . $post->image) }}" alt="">
            <p>{{ $post->content }}</p>
            <div class="singlepage_pagination"> <a class="previous_btn" href="#">Previous</a> <a class="next_btn" href="#">Next</a> </div>
            <div class="social_area wow fadeInLeft">
                <ul>
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                </ul>
            </div>
            <div>
                Tags
                @foreach($post->tags as $tag)
                    <span class="label label-success">{{ $tag->name }}</span>
                @endforeach
            </div>
            <div class="author"> <a href="#"><img src="{{ url('images/' . $post->user->avatar) }}" alt=""></a>
                <div class="author_details">
                    <h3><a href="#">{{ $post->user->name }}</a></h3>
                    <p>Email: {{ $post->user->email }}</p>
                </div>
            </div>
        </div>
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
@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-5">
                <h1 class="mb-5">{{ $post->title }}</h1>
                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decortaion-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"  class="img-fluid" alt="{{ $post->category->name }}">
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                

                <a href="/blog" class="text-decortaion-none d-block mt-3">Back to post</a>
            </div>
        </div>
    </div>

    
@endsection
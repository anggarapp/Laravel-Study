@extends('layouts.main')
@section('container')
<div class="container">
<div class="row justify-content-center mb-5">
    <div class="col-md-8">
        <h2 class="mb-3">{{ $post->title }}</h2>
        <p>By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
            @else    
            <img src="https://images.pexels.com/photos/574077/pexels-photo-574077.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
        <article class="my-4 fs-5">
            {!! $post->body !!}
        </article>
        
        <a href="/blog" class="d-block mt-3">Back to Posts</a>
    </div>
</div>
</div>
@endsection
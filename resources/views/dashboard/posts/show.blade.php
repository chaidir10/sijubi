@extends('dashboard.layouts.main')

@section('container')
<div class="container"></div>
    <div class="row my-5">
        <div class="col-lg-8">
            <h1 class="mb-3">{{$post->title}}</h1>

            <a href="/dashboard/posts" class="btn btn-sm btn-success mb-3">
                <span data-feather="arrow-left"></span>
                Back to my posts
            </a>
            <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-sm btn-warning mb-3">
                <span data-feather="edit"></span>
                Edit
            </a>
            <form action="/dashboard/posts/{{$post->slug}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-sm btn-danger mb-3" onclick="return confirm('Sure to delete data?')">
                    <span data-feather="x-circle"></span> Delete
                </button>
            </form>

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;" class="row">
                <img src="{{asset('storage/'. $post->image)}}" alt="{{$post->category->name}}" class="img-fluid d-flex justify-content-center align-items-center">
            </div>
                
            @else()
            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid">
            @endif

            <article class="my-3">
                <p>{!!$post->body!!}</p>
            </article>

            <a href="/dashboard/posts" class="text-decoration-none d-block mt-3"><span data-feather="arrow-left"></span> Back to posts</a>
        </div>
    </div>
</div>
@endsection
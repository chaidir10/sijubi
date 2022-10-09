@extends('layouts.main')

@section('container')
<h1 class="text-center mb-3">{{$title}}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if (request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
            @endif

            @if (request('author'))
            <input type="hidden" name="author" value="{{request('author')}}">
            @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search"
                    value="{{request('search')}}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
    @if ($posts[0]->image)
    <div style="max-height: 350px; overflow:hidden;" class="row">
        <img src="{{asset('storage/'. $posts[0]->image)}}" alt="{{$posts[0]->category->name}}"
            class="img-fluid d-flex justify-content-center align-items-center">
    </div>
    @else()
    <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top"
        alt="{{$posts[0]->category->name}}">
    @endif
    <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{$posts[0]->slug}}"
                class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
        <p>
            <small>Oleh. <a href="/posts?author={{$posts[0]->author->username}}"
                    class="text-decoration-none">{{$posts[0]->author->name}}</a> | Category : <a
                    href="/posts?category={{$posts[0]->category->slug}}"
                    class="text-decoration-none">{{$posts[0]->category->name}}</a>
                {{$posts[0]->created_at->diffForhumans()}}</small>
        </p>

        <p class="card-text">{!!$posts[0]->excerpt!!}</p>
        <a href="/posts/{{$posts[0]->slug}}" class="btn btn-primary text-decortion-none">Read more</a>
    </div>
</div>



<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-4">
            <div class="card">
                <a href="/posts?category={{$post->category->slug}}" class="text-decoration-none">
                    <div class="position-absolute px-3 py-2 text-white rounded "
                        style="background-color: rgba(0, 0, 0, 0.5)">{{$post->category->name}}
                    </div>
                </a>
                @if ($post->image)
                <img src="{{asset('storage/'. $post->image)}}" alt="{{$post->category->name}}" class="img-fluid">
                @else()
                <img src="https://source.unsplash.com/500x500?{{$post->category->name}}" class="card-img-top"
                    alt="{{$post->category->name}}">
                @endif
                <div class="card-body ">
                    <h5 class="card-title text-dark">{{$post->title}}</h5>
                    <p>
                        <small>
                            Oleh.
                            <a href="/posts?author={{$post->author->username}}" class="text-decoration-none">
                                {{$post->author->name}}
                            </a> | posted {{$post->created_at->diffForhumans()}}
                        </small>
                    </p>
                    <p class="card-text">{!!$post->excerpt!!}</p>
                    <a href="/posts/{{$post->slug}}" class="text-decoration-none btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No Post Found :(</p>
@endif

<div class="d-flex justify-content-center mb-5">
    {{ $posts->links() }}
</div>

@endsection
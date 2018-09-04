@extends('layouts.app')

@section('content')
    <h1 class="text-center">All Posts</h1>
    @if(count($posts) > 0)
                    @foreach($posts as $post)
                    
                    <div class="col-md-4">
                       <a href="/posts/{{$post->id}}"> <img style="width:350px;height:240px;" src="/storage/cover_images/{{$post->cover_image}}"> </a>
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small style="position:relative; bottom:8px;">Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        
                    </div>
                    {{--  <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>  --}}
                    @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
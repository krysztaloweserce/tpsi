@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    
    @if(count($posts) > 1)
        @foreach($posts as $post)
        <div class="card">
            <div class="card-body">
              <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small class="card-text">Written on {{$post->created_at}} by <em>{{$post->user->name}}</em></small><br/>
              <button class="btn btn-sm btn-dark"><a href="/posts/{{$post->id}}" class="text-light">Read More</a></button>
            </div>
          </div>
        @endforeach
    @else 
        <p>No posts found.</p>
    @endif
@endsection
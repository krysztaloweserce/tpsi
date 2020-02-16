@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    
    @if(count($posts) > 1)
        @foreach($posts as $post)
        <div class="media">
            <div class="media-body">
              <h3 class="mt-0"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
              <br/>
              <small>{{$post->created_at}}</small>
            </div>
          </div>
        @endforeach
    @else 
        <p>No posts found.</p>
    @endif
@endsection
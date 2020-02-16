@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <br/>
    <small>Written on {{$post->created_at}}</small>
    <div class="jumbotron">
        <p>{{$post->body}}</p>
    </div>
@endsection
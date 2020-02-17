@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Go Back</a><br/>
    <h1>{{$post->title}}</h1>
    <br/>
    <small>Written on {{$post->created_at}}</small>
    <div class="jumbotron">
        <p>{{$post->body}}</p>
    </div>
    <hr>
    <a href = "/posts/{{$post->id}}/edit" clas="btn btn-default">Edit Post</a>

    {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' =>'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
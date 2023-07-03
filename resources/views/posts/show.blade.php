@extends('layouts.app')

@section('content')
    <h1>Show Post</h1>
    <h2><a href="{{route('posts.edit', $post->id);}}">{{$post->name;}}</a></h2>
@endsection
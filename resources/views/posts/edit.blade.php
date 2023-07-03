@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{route('posts.show', $post->id);}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="name1" placeholder="{{$post->name;}}">
        <input type="submit" name="submit">
    </form>
@endsection
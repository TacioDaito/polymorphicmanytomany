@extends('layouts.app')

@section('content')
    <h1>Post Index</h1>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{route('posts.show', $post->id);}}">{{$post->name;}}</a></li>
        @endforeach
    </ul>
@endsection
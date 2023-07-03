@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form action="/view/posts" method="post">
        @csrf
        <input type="text" name="name" id="name1" placeholder="Enter name">
        <input type="submit" name="submit">
    </form>
@endsection
@yield('footer')  
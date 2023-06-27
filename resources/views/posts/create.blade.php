@extends('layouts.app')

@section('content')
    <h1>Create Page</h1>
    <form action="view/posts" method="post">
        <input type="text" name="title" id="title1" placeholder="Enter title">
        <input type="submit" name="submit">
    </form>
@endsection
@yield('footer')
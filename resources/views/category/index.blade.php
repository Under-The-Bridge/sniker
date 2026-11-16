@extends('master')

@section('content')
    @foreach ($categories as $category)
        <a href="/category/{{$category->id}}">{{$category->name}}</a>
    @endforeach
@endsection

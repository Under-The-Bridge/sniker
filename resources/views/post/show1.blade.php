@extends('master')

@section('title')
    Главная страница
@endsection

@section('content')
    @foreach ($links as $link)
        <a href="http://{{ $link['href'] }}">{{ $link['text'] }}</a>
    @endforeach
@endsection

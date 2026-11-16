@extends('master')

@section('title')
    Главная страница
@endsection

@section('content')
    <ul>
        @foreach ($links as $link)
            <li><a href="http://{{ $link['href'] }}">{{ $link['text'] }}</a></li>
        @endforeach
    </ul>
@endsection

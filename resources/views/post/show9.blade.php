@extends('master')

@section('title')
    Главная страница
@endsection

@section('content')
    @foreach ($arr as $ar)
        <input value="{{ $ar }}">
    @endforeach
@endsection

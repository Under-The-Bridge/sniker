@extends('master')

@section('title')
    Главная страница
@endsection

@section('content')
    <select>
        @foreach ($cities as $city)
            <option>{{ $city }}</option>
        @endforeach
    </select>
@endsection

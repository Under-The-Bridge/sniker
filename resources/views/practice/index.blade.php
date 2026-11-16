@extends('master')

@section('content')
    @for ($i = 1; $i <= 21; $i++)
        <a class="nav-link link-primary" href="/practice/{{ $i }}">Практика {{ $i }}</a>
    @endfor
@endsection

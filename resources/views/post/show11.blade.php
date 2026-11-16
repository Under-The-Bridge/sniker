@extends('master')

@section('title')
    Главная страница
@endsection

@section('content')
    <ul>
        @foreach ($days as $day)
            <li
            @if ($day == $today)
                class="active"
            @endif
            >
                {{ $day }}
            </li>
        @endforeach
    </ul>
@endsection


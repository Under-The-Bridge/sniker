@extends('master')

@section('title')
    О компании
@endsection

@section('content')
    <h1>Инфа о нас!</h1>
    <p>Мы разрабатываем веб приложения</p>
    @foreach ($users as $user)
        <p>{{ $user['name'] }}: возраст {{ $user['age'] }}</p>
    @endforeach
@endsection

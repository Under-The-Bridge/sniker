@extends('master')

@section('title')
    Главная страница
@endsection

@section('content')
    <table>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee['name'] }}</td>
                <td>{{ $employee['surn'] }}</td>
                <td>{{ $employee['salary'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection

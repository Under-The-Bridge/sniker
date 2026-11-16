@extends('master')

@section('title')
    Главная страница
@endsection

@section('content')
    <table>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Salary</th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee['name'] }}</td>
                <td>{{ $employee['surn'] }}</td>
                <td>{{ $employee['salary'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection

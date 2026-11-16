@extends('master')

@section('title')
    Главная страница
@endsection

@section('content')
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Salary</th>
        </tr>
        @for ($i = 0; $i < count($employees); $i++)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $employees[$i]['name'] }}</td>
                <td>{{ $employees[$i]['surn'] }}</td>
                <td>{{ $employees[$i]['salary'] }}</td>
            </tr>
        @endfor
    </table>
@endsection

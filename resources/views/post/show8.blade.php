@extends('master')

@section('title')
    Главная страница
@endsection

@section('content')
    <table>
        @foreach ($users as $user)
            <tr @if ($user['banned']) style="color: red;" @else style="color: green;" @endif>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surn'] }}</td>
                <td>
                    @if ($user['banned'])
                        banned
                    @else
                        active
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection

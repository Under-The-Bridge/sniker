@extends('master')

@section('content')
    <form action="{{route('category_edit')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="category" class="form-label">Поменять название категории</label>
            <input type="text" class="form-control" id="category" name="name" value="{{$category->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

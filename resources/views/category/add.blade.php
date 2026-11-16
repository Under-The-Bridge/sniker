@extends('master')

@section('content')
    <form action="{{ route('category_create') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="category" class="form-label">Название категории</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
        @error('category')
            <p style="color:red">{{$message}}</p>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

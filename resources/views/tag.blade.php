@extends('master')

@section('title')
    Каталог
@endsection

@section('content')
    <div class="d-flex">
        @foreach ($posts as $post)
            <section class="card" style="max-width: 240px">
                <img src="{{ asset('images/' . $post->thumbnail?->path) }}" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <a class="card-text"
                        href="/catalog/{{ $post->category_id }}"><small>{{ $post->category?->name }}</small></a>
                    @foreach ($post->tags as $tag)
                        <br>
                        <a class="card-text" style="color:red"
                            href="/tag/{{ $tag->id }}"><small>{{ $tag->name }}</small></a>
                    @endforeach
                    <p class="card-text">{{ $post->description }}</p>
                </div>
            </section>
        @endforeach
    </div>
@endsection

@section('adverts')
    <h1>Тут реклама</h1>
@endsection

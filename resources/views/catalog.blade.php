@extends('master')

@section('title')
    Каталог
@endsection

@section('content')
    <div>
        Категории:
        <select id="select" name="category">
            @foreach ($allCategories as $category)
                <option @selected(request()->is('catalog/'.$category->id)) value="{{ $category->id }}">{{ $category->name }}</a></option>
            @endforeach
        </select>
        <script>
            let select = document.getElementById("select");
            select.addEventListener('change', () => {
                window.location.href = "/catalog/"+ select.value;
            })
        </script>
    </div>
    <div>
        <a href="/category">Добавить Категорию</a>
        <a href="/categories">Все категории</a>
    </div>
    <div class="">
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
                        href="/tag/{{$tag->id}}"><small>{{$tag->name}}</small></a>
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

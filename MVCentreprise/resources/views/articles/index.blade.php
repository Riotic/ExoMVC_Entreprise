@extends('layouts.default')

@section('main')
    <div class="flexVertical spaceE" >
        @foreach ($articles as $article)
            <div class="cardsAnnonce">
                <a href="{{route('articles.show', $article->id)}}" class="titleCard" >{{$article->id}}</a>
                <p class="texteAnnonce">{{$article->description}}</p>
            </div>
        @endforeach
    </div>

@endsection

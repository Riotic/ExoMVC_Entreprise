@extends('layouts.default')

@section('main')
    <div class="flexVertical spaceE" >
        <div>{{$article->title}}</div>
        <div>{{$article->description}}</div>
        <a href="{{route('articles.edit', $article)}}">modifier</a >

        <form action="{{ route('articles.destroy', $article->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer article</button>
        </form> 
            
    </div>


@endsection

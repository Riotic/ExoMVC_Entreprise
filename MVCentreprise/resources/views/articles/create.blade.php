@extends('layouts.default')

@section('main')


<div>
    <form class="flexVertical ali-center spaceB" action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <p>Créer un article</p>
        <input id="title" name="title" value="" >
        <textarea id="description"  name="description" rows="7" cols="70">
        </textarea>
        <button  id="validation">Créer l'<article></article></button>
    </form>
</div>


@endsection

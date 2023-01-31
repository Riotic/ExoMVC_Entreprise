@extends('layouts.default')

@section('main')


<div>
    <form class="flexVertical ali-center spaceB" action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <p>Modifier un article</p>
        <input id="title" name="title" value="" placeholder="<?php echo $article->title;?>" >
        <textarea id="description"  name="description" rows="7" cols="70"><?php echo $article->description; ?></textarea>
        <button  id="validation">Modifier l'article</button>
    </form>
</div>


@endsection

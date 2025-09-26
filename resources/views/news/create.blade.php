@extends('layouts.app')

@section('content')
<h1>Criar Notícia</h1>
<form action="{{ route('news.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Título"><br>
    <textarea name="content" placeholder="Conteúdo"></textarea><br>
    <button type="submit">Salvar</button>
</form>
@endsection

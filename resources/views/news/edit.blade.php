@extends('layouts.app')

@section('content')
<h1>Editar Notícia</h1>
<form action="{{ route('news.update', $news) }}" method="POST">
    @csrf @method('PUT')
    <input type="text" name="title" value="{{ $news->title }}"><br>
    <textarea name="content">{{ $news->content }}</textarea><br>
    <button type="submit">Atualizar</button>
</form>
@endsection
    
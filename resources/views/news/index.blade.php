@extends('layouts.app')

@section('content')
<h1>Notícias</h1>
<a href="{{ route('news.create') }}">Nova Notícia</a>
<ul>
@foreach($news as $n)
    <li>
        <strong>{{ $n->title }}</strong> - {{ $n->content }}
        <a href="{{ route('news.edit', $n) }}">Editar</a>
        <form action="{{ route('news.destroy', $n) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </li>
@endforeach
</ul>
@endsection


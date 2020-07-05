@extends('layouts.master')

@section('title', $article->judul)

@section('content')
<h1 class="h3 mb-4 text-gray-800">Detil Artikel</h1>
<form action="{{ url('artikel/'.$article->id)}}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger mb-4">Hapus Artikel</button>
</form>

<div class="card shadow mb-4">
    <div class="card-body">
       <h4>Judul: {{ $article->judul }}</h4>
       <h6>slug: {{ $article->slug }}</h6>
       <p>Isi: {{ $article->isi }}</p>
       @php($tags = explode(' ', $article->tag))
       @foreach ($tags as $tag)
           <button href="#" class="btn btn-sm btn-success text-white">{{ $tag }}</button>
       @endforeach
    </div>
</div>
@endsection

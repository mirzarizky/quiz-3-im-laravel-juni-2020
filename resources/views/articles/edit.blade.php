@extends('layouts.master')

@section('title', 'Edit Artikel')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Edit Artikel</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ url('artikel/'.$article->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul" value="{{ $article->judul }}" required>
            </div>
            <div class="form-group">
              <label for="isi">Isi</label>
              <textarea name="isi" id="isi" class="form-control" required placeholder="Isi Artikel">{{ $article->isi }}</textarea>
            </div>
            <div class="form-group">
                <label for="tag">Tag</label>
                <textarea name="tag" id="tag" class="form-control" required placeholder="Tag Artikel">{{ $article->tag }}</textarea>
                <small class="text-muted">Tag dapat lebih dari 1. Harap pisahkan dengan spasi (contoh: info web phplaravel).</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

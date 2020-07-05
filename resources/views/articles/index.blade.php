@extends('layouts.master')

@section('title', 'List Artikel')

@push('scripts')
<!-- script tambahan sweet alert, bukan dari bawaan sb-admin-2 -->
<script src="{{asset('sbadmin2/js/swal.min.js')}}"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush

@section('content')
    <h1 class="h3 mb-4 text-gray-800">List Artikel</h1>
    <div>
        <a href="{{ url('artikel/create')}}" class="btn btn-primary mb-4">Tambah Artikel</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Judul</th>
                  <th>Slug</th>
                  <th>Isi</th>
                  <th>Tag</th>
                  <th>Tanggal Dibuat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($articles as $article)
                      <tr>
                        <td>{{ $article->judul }}</td>
                        <td>{{ $article->slug }}</td>
                        <td>{{ $article->isi }}</td>
                        <td>{{ $article->tag }}</td>
                        <td>{{ $article->tanggal_dibuat }}</td>
                        <td>
                            <a href="{{url('artikel/'.$article->id)}}" title="Detail"><button class="btn btn-secondary"><i class="fa fa-eye"></i></button></a>
                            <a href="{{url('artikel/'.$article->id.'/edit')}}" title="Edit"><button class="btn btn-warning"><i class="fa fa-pen"></i></button></a>
                        </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
@endsection

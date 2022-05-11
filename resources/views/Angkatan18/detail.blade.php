@extends('Template.main')
@section('judul','Angkatan 18 Detail')

@section('content p-4')
    <div class="container">
   <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Detail Siswa</h1>

    <div class="card" style="width: 16rem;">
    <img src="/image/{{ $pelajar->image }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $pelajar->nama }}</h5>
      <p class="card-text">{{ $pelajar->judul }}</p>
      <p class="card-text">{{ $pelajar->konsentrasi }}</p>
      <p class="card-text">{{ $pelajar->nilai }}</p>
      <a href="{{ $pelajar->id }}/edit" class="btn btn-primary">Edit</a>

       <form action="{{ $pelajar->id }}" method="post" class="d-inline">
       @method('delete')
       @csrf
       <button type="submit" class="btn btn-danger">Hapus</button>
       </form>
       <a href="/Angkatan18" class="btn btn-warning">kembali</a>
    </div>
  </div>

 </div>
 </div>
 </div>
@endsection

@extends('Template.main')
@section('judul','Detail')

@section('content p-4')
    <div class="container">
   <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Detail Siswa</h1>

    <div class="card" style="width: 16rem;">
    <img src="/image/{{ $opi->image }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $opi->nama }}</h5>
      <p class="card-text">{{ $opi->judul }}</p>
      <p class="card-text">{{ $opi->konsentrasi }}</p>
      <p class="card-text">{{ $opi->nilai }}</p>
      <a href="{{ $opi->id }}/edit" class="btn btn-primary">Edit</a>
       <a href="/lihat" class="btn btn-warning">kembali</a>
    </div>
  </div>

 </div>
 </div>
 </div>
@endsection

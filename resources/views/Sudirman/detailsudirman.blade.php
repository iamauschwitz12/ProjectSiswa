@extends('Template.main')
@section('judul','Detail')

@section('content p-4')
    <div class="container">
   <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Detail Siswa</h1>

    <div class="card" style="width: 16rem;">
    <img src="/image/{{ $sudirman->image }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $sudirman->nama }}</h5>
      <p class="card-text">{{ $sudirman->judul }}</p>
      <p class="card-text">{{ $sudirman->konsentrasi }}</p>
      <p class="card-text">{{ $sudirman->nilai }}</p>
      <a href="{{ $sudirman->id }}/edit" class="btn btn-primary">Edit</a>
       <a href="/lihatsudirman" class="btn btn-warning">kembali</a>
    </div>
  </div>

 </div>
 </div>
 </div>
@endsection

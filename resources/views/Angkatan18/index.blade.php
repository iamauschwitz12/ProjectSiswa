@extends('Template.main')
@section('judul','Angkatan 18')

@section('content p-4')
    <div class="container">
   <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Daftar Siswa Angkatan 18</h1>

   <a href="/Angkatan18/tambah" class="btn btn-success my-3">Tambah Siswa</a>

   <ul class="list-group">
       @foreach ($pelajar as $p) <br>
     <li class="list-group-item d-flex justify-content-between align-items-center">
       {{ $p->nama }}
      <a href="/Angkatan18/{{$p->id}}" class="btn btn-info">detail</a>
     </li>
     @endforeach
   </ul>

 </div>
 </div>
 </div>
@endsection

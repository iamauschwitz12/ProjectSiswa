@extends('Template.main')
@section('judul','Rumah')

@section('content p-4')
    <div class="container">
   <div class="row">
    <div class="col-15">
      <center>
    <h1 class="mt-3 mb-4">Lihat data Siswa Opi</h1>
</center>
    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <form class="" action="/cariopi" method="GET">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-primary" type="submit">Cari</button>
            </div>
            <input type="text" name="keyword" type="search" class="form-control  col-3" placeholder="Misal : Nama atau Angkatan"
            aria-label="" aria-describedby="basic-addon1">
          </div>
        </form>
    <table class="table table-hover" style="border: 1px;">
      <thead style="">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Angkatan</th>
      <th scope="col">Nilai</th>
      <th scope="col">Pembimbing</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
     @foreach($opi as $opii)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td style="width: 20%;">{{$opii->nama}}</td>
      <td>{{$opii->angkatan}}</td>
      <td>{{$opii->nilai}}</td>
      <td style="width: 15%;">{{$opii->pembimbing}}</td>
      <td>{{$opii->judul}}</td>
      <td>
        <form action="/lihat/{{ $opii->id }}" method="post" class="d-inline">
           @method('delete')
           @csrf
           <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="submit" class="btn btn-danger">Hapus</button>
             <a href="/detail/{{$opii->id}}" class="btn btn-info">detail</a>
           </div>
           </form>
      </td>
    </tr>
    @endforeach
    </table>
  </div>
  </div>
  </div>
@endsection

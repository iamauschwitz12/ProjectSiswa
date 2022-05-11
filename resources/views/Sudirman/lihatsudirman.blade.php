@extends('Template.main')
@section('judul','Rumah')

@section('content p-4')
    <div class="container">
   <div class="row">
    <div class="col-15">
    <center>
    <h1 class="mt-3 mb-4">Lihat data Siswa Sudirman</h1>
  </center>
    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <button class="btn btn-primary" type="button">Cari</button>
          </div>
          <input type="text" class="form-control  col-3" placeholder="Misal : Nama atau Angkatan" aria-label="" aria-describedby="basic-addon1">
        </div>

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
  <tbody style="table-layout: fixed; width: 100%;">
     @foreach($sudirman as $sudirmann)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td style="width: 20%;">{{$sudirmann->nama}}</td>
      <td>{{$sudirmann->angkatan}}</td>
      <td>{{$sudirmann->nilai}}</td>
      <td style="width: 15%;">{{$sudirmann->pembimbing}}</td>
      <td>{{$sudirmann->judul}}</td>
      <td>
        <form action="/lihatsudirman/{{ $sudirmann->id }}" method="post" class="d-inline">
           @method('delete')
           @csrf
           <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="submit" class="btn btn-danger">Hapus</button>
             <a href="/detailsudirman/{{$sudirmann->id}}" class="btn btn-info">detail</a>
           </div>
           </form>

      </td>
    </tr>
    @endforeach
    </table>
{{$sudirman->links()}}
  </div>
  </div>
  </div>
@endsection

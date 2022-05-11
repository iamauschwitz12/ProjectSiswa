@extends('Template.main')
@section('judul','Tambah Siswa')

@section('content p-4')
    <div class="container">
   <div class="row">
    <div class="col-10">
    <h1 class="mt-3">Form Tambah Data Siswa Opi</h1>

    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

    <form method="post" action='/tambadatahopi' enctype="multipart/form-data">
      @csrf
	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" id="nama" name="nama" class="form-control col-5" placeholder="Masukan Nama ...">
	</div>

  <div class="form-group">
    <label for="umur">Angkatan</label>
    <input id="angkatan"  name="angkatan" class="form-control col-5" placeholder="Misal : 18 ...">
  </div>

  <div class="form-group">
		<label for="alamat">Judul</label>
		<textarea class="form-control col-5" id="judul" name="judul" rows="3" placeholder="Judul TA .."></textarea>
	</div>

  <div class="form-group">
    <label for="umur">Pembimbing</label>
    <input id="pembimbing" name="pembimbing" class="form-control col-5" placeholder="Pembimbing ...">
  </div>

	<div class="form-group">
		<label for="umur">Nilai</label>
		<input id="nilai" name="nilai" class="form-control col-3" placeholder="Nilai Akhir ...">
	</div>

  <div class="form-group">
		<label for="image">Pilih Foto</label>
		<input type="file" class="form-control-file" id="image" name="image">
	</div>


	<button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
    </div>
    </div>
@endsection

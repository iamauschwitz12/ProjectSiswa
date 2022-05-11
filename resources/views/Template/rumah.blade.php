@extends('Template.main')
@section('judul','Rumah')

@section('content p-4')
    <div class="container">
   <div class="row">
    <div class="col-10">
    <body>
    <div class="container">
      <h2>PalComTech Opi</h2>
        <div class="row">
              @foreach ($angkatan as $item)
            <div class="col-lg-4 col-sm-6">
                <div class="card-box bg-blue">
                    <div class="inner">
                        <h3> Total {{ $item->jumlah }} Siswa </h3>
                        <p> Angkatan {{ $item->angkatan }} </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <a href="{{url('angkatanopi/'.$item->angkatan)}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
              @endforeach
        </div>
        <h2>PalComTech Sudirman</h2>
          <div class="row">
            @foreach ($angkatans as $ang)
              <div class="col-lg-4 col-sm-6">
                  <div class="card-box bg-orange">
                      <div class="inner">
                          <h3> Total {{ $ang->jumlah }} Siswa </h3>
                          <p> Angkatan {{ $ang->angkatan }} </p>
                      </div>
                      <div class="icon">
                          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                      </div>
                      <a href="{{url('angkatansudirman/'.$ang->angkatan)}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              @endforeach
          </div>
    </div>
</body>
      </div>
    </div>
  </div>
@endsection

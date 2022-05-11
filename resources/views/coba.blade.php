<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="{{asset('flexslider.css')}}" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="{{asset('jquery.flexslider.js')}}"></script>
    <!-- Place in the <head>, after the three links -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>

<style media="screen">
<style media="screen">
.carousel-item
{
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
  body {
background-color: #B3E5FC
}

.padding {
padding: -30rem;
}

.user-card-full {
overflow: auto;
}

.card {
border-radius: 10px;
-webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
border: none;
margin-bottom: 30px
}

.m-r-0 {
margin-right: 0px
}

.m-l-0 {
margin-left: 0px
}

.user-card-full .user-profile {
border-radius: 10px 0 0 10px
}

.bg-c-lite-green {
background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
background: linear-gradient(to right, #ee5a6f, #f29263)
}

.user-profile {
padding: 50px 0
}

.card-block {
padding: 2.25rem
}

.m-b-25 {
margin-bottom: 25px
}

.img-radius {
border-radius: 10px
}

h6 {
font-size: 20px
}

.card .card-block p {
line-height: 40px
}

@media only screen and (min-width: 2000px) {
p {
    font-size: 25px

}
}

.card-block {
padding: 1.25rem
}

.b-b-default {
border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
margin-bottom: 20px
}

.p-b-5 {
padding-bottom: 5px !important
}

.card .card-block p {
line-height: 30px
}

.m-b-10 {
margin-bottom: 10px;
}

.text-muted {
color: #919aa3 !important
}

.b-b-default {
border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
font-weight: 700
}

.m-b-20 {
margin-bottom: 20px
}

.m-t-40 {
margin-top: 20px
}

.p-b-5 {
padding-bottom: 10px !important
}

.m-b-10 {
margin-bottom: 10px
}

.m-t-40 {
margin-top: 20px
}


.user-card-full .social-link li {
display: inline-block
}

.user-card-full .social-link li a {
font-size: 20px;
margin: 0 10px 0 0;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out
}

</style>
</style>
  </head>
  <body>
<div class="d-flex px-4"> <span class="square"><img src="{{asset('icon/pct.png')}}" height="100" width="100"
style="
margin-left: 220px;
margin-top: 10px;
"/></span>
</div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="100000" style="margin-top:10px;">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($angkatan as $key => $item)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
              <div class="page-content page-container" id="page-content">
          <div class="padding">
              <div class="row container d-flex justify-content-center">
                  <div class="col-xl-10 col-md-12" style="margin-left:250px; margin-top:4px">
                      <div class="card user-card-full">
                          <div class="row m-l-0 m-r-0">
                              <div class="col-sm-4 bg-c-lite">
                                <div class="card" style="
                                margin-top: 10px;
                                  ">
                                  <img src="/image/{{ $item->image }}" alt="Avatar" style="
                                  width: 280px;
                                  height: 380px;
                                  margin-left: -10;
                                  border-radius: 20px;
                                  object-fit: cover;
                                  ">
                                </div>
                              </div>
                              <div class="col-sm-8">
                                  <div class="card-block ">
                                      <h6 class="m-b-10 p-b-10 b-b-default f-w-600" style="font-size:20px">Angkatan {{ $item->angkatan }}</h6>
                                      <div class="row">
                                          <div class="col-sm-10">
                                              <p class="m-b-10 w3-text-orange f-w-400" style="color:black;">Nama</p>
                                              <h6 class="m-b-10 p-b-5 b-b-default f-w-600">{{ $item->nama }}</h6>
                                          </div>
                                          <div class="col-sm-10">
                                              <p class="m-b-10  f-w-400">Nilai Akhir</p>
                                              <h6 class="m-b-10 p-b-5 b-b-default f-w-600">{{ $item->nilai }}</h6>
                                          </div>
                                      </div>
                                      <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600" style="text-transform: capitalize">
                                        {{ $item->judul }}</h6>
                                      <div class="row">
                                          <div class="col-sm-10">
                                              <p class="m-b-10  f-w-400">Pembimbing</p>
                                              <h6 class="m-b-10 p-b-5 b-b-default f-w-600">{{ $item->pembimbing }}</h6>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <div>
      <a href="/menusudirman">
      <button type="button" class="btn btn-primary" style="
      margin-left:1050px;
      margin-bottom: 20px;
      ">Kembali</button>
      </a>
    </div>
  </body>
</html>

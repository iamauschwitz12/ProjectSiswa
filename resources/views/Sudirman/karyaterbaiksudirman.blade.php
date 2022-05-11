<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Daftar Siswa</title>
    <!-- Place in the <head>, after the three links -->

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
  overflow: hidden;
  height: 100vh;
  background: rgb(58,157,224);
  background: linear-gradient(0deg, rgba(58,157,224,1) 0%, rgba(6,98,165,1) 50%);
}

*{
        padding: 0px;
        margin: auto ;
      }

#karosel{
        background-color: white;
        width: 1000px;
        overflow: hidden;
        border-radius: 25px;
        margin-bottom: 20px;
      }

      .photo{
        float: left;
      }

      .datasiswa{
        float: left;
        margin-left: 20px;
        width: 660px;
      }

      .prof{
        font-size: 2em;
        font-weight: bold;
      }

      .angkatan{
        font-size: 1.5em;
      }

      .nama{
        font-size: 2em;
        font-weight: bold;
      }

      .prof, .angkatan, .nama, .nilai, .h-judul, .isi-judul, .h-pemb, .isi-pemb{
        margin: 2px 0px;
      }

      .nilai{
        font-size: 1.2em;
      }

      .h-judul, .h-pemb{
        margin-top: 30px;
        font-style: italic;
      }

      .isi-judul{
        font-size: 1.5em;
        font-weight: bold;
      }

      .isi-pemb{
        font-size: 1.3em;
        font-weight: bold;
      }

.heading {
display: grid;
grid-template-columns: auto auto auto;
padding-top: 20px;
color: white;
margin-bottom: 20px;
font-size: 32px;
font-weight: bold;
text-align: center;
}

.footer{
  display: grid;
  grid-template-columns: auto auto auto;
  text-align: center;
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
    <div class="container">
    <div class="heading">
      <div class="tombol">
        <a href="/rumah">
          <button type="button" class="btn btn-primary"
            style="
            font-weight: bold;
            background-color: #ff7800;
            ">
          <img src="{{asset('image/home.png')}}" alt=""  width="20"
          style="vertical-align:middle; margin-top:-5px;
          ">
          Dashboard</button>
        </a>
      </div>
      <span>Ceremony PalComTech</span>
      <div class="logo">
        <img src="{{asset('image/logo.png')}}" alt="" width="170">
      </div>
    </div>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="100000" style="margin-top:10px;">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
         <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="page-content page-container" id="page-content">
            <div id="karosel">
                <video width="1020" height="450" controls style="padding:20px
                margin-right: 10px;
                margin-top: 10px;
                ">
                  <source src="/image/Nominasi Fix.mp4" type="video/mp4">
                  <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
                </video>
            </div>
          </div>
          </div>
          <div class="carousel-item">
            <div class="page-content page-container" id="page-content">
                        <div id="karosel">
                          <div class="photo" style="background-image:url('/image/20211221025625.jpg');
                          width:300px; height:460px; background-position: center; background-size: cover;">
                          </div>
                          <div class="datasiswa">
                            <p class="prof">Project Terbaik</p>
                            <p class="angkatan">Angkatan 79</p>
                            <hr>
                            <p class="nama">Fanny Erika Fally Ratu</p>
                            <p class="nilai">Nilai Akhir : <strong>75.01</strong></p>
                            <p class="h-judul">Judul Tugas Akhir</p>
                            <p class="isi-judul">Desain Website RD dan Partners Menggunakan HTML 5 dan CSS 3</p>
                            <p class="h-pemb">Pembimbing</p>
                            <p class="isi-pemb">Krisna Islami, S.Kom</p>
                          </div>
                        </div>
                      </div>
        </div>
      </div>
  <div class="container footer">
  <div class="tombol">
    <a  href="#myCarousel" role="button" data-bs-target="#myCarousel" data-slide="prev" aria-hidden="true" class="sr-only" class="carousel-control-prev-icon">
      <button type="button" class="btn btn-primary" href="#myCarousel" aria-hidden="true"
        style="
        font-weight: bold;
        background-color: #ff7800;
        ">
      <img src="{{asset('image/left.png')}}" alt=""  width="20"
      style="vertical-align:middle; margin-top:-5px;
      ">
      Kembali</button>
    </a>
  </div>
<div class="tombol">
  <a href="/index">
    <button type="button" class="btn btn-primary"
      style="
      font-weight: bold;
      background-color: #ff7800;
      ">
    Beranda</button>
  </a>
</div>
<div class="tombol">
  <a href="#myCarousel" role="button" data-bs-target="#myCarousel" data-slide="next" aria-hidden="true" class="sr-only" class="carousel-control-prev-icon">
    <button type="button" class="btn btn-primary" href="#myCarousel" aria-hidden="true"
      style="
      font-weight: bold;
      background-color: #ff7800;
      ">
    Lihat Project
    <img src="{{asset('image/right.png')}}" alt=""  width="20"
    style="vertical-align:middle; margin-top:-5px;
    ">
  </button>
  </a>
</div>
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript">
    var duration = 60 * 1000;
var animationEnd = Date.now() + duration;
var defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

function randomInRange(min, max) {
return Math.random() * (max - min) + min;
}

var interval = setInterval(function() {
var timeLeft = animationEnd - Date.now();

if (timeLeft <= 0) {
  return clearInterval(interval);
}

var particleCount = 50 * (timeLeft / duration);
// since particles fall down, start a bit higher than random
confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 } }));
confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 } }));
}, 250);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  </body>
</html>

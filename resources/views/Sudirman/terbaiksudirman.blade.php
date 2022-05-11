<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body {
      height: 100vh;
      background: rgb(58,157,224);
      background: linear-gradient(0deg, rgba(58,157,224,1) 0%, rgba(6,98,165,1) 50%);
}
.tengah{
  display: grid;
  grid-template-columns: auto auto auto;
}

.card {
    border: none;
    margin: 20px;
    color: #0662a5;
    border-radius: 20px;
    transition: all 0.5s;
    cursor: pointer;
    color: #0662a5;
    text-align:center;
    font-size: 1.5em;
    font-weight: bold;
    padding: 20px;
}

.card a{
  color: #0662a5;
}
border-radius: 20px;

.card:hover {
    transform: scale(1.1)
}

.heading {
display: grid;
grid-template-columns: auto auto auto;
padding-top: 40px;
color: white;
margin-bottom: 20px;
}

.name {
    font-size: 50px;
    font-weight: bold
}

.square {
    background-color: #fedcdd;
    height: 60px;
    width: 60px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.email {
    font-size: 30px;
    font-weight: bold
}

.dummytext {
    font-size: 12px;
    font-weight: normal;
    color: #848590
}

.icons i {
    color: #FA222A;
    margin-left: 25px
}

.icons span {
    font-size: 13px;
    font-weight: normal;
    color: #848590
}

.square1 {
    background-color: #cfe3fe;
    height: 60px;
    width: 60px;
    border-radius: 10px;
    display: center;
    align-items: center;
    justify-content: center
}

.icons1 i {
    color: #497eea;
    margin-left: 25px
}

.icons1 span {
    font-size: 13px;
    font-weight: normal;
    color: #848590
}

.square2 {
    background-color: #ffefc5;
    height: 30px;
    width: 30px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center
}

.icons2 i {
    color: #ffc227;
    margin-left: 25px
}

.icons2 span {
    font-size: 13px;
    font-weight: normal;
    color: #848590
}

.square5 {
    background-color: #41cfff;
    height: 30px;
    width: 30px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center
}

.icons5 i {
    color: #41cfff;
    margin-left: 25px
}

.icons5 span {
    font-size: 13px;
    font-weight: normal;
    color: #848590
}

.square4 {
    background-color: #eae6fd;
    height: 30px;
    width: 30px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center
}

.icons4 i {
    color: #6a35ff;
    margin-left: 25px
}

.icons4 span {
    font-size: 13px;
    font-weight: normal;
    color: #848590
}

.square3 {
    background-color: #fedfce;
    height: 30px;
    width: 30px;
    border-radius: 8px;
    display: center;
    align-items: center;
    justify-content: center
}

.icons3 i {
    color: #ff8339;
    margin-left: 25px
}

.icons3 span {
    font-size: 13px;
    font-weight: normal;
    color: #848590
}


</style>
    <title>Menu </title>
  </head>
  <body>

  <div class="container">
    <div class="heading">
      <div class="tombol">
        <a href="/index">
          <button type="button" class="btn btn-primary"
            style="
            font-weight: bold;
            background-color: #ff7800;
            ">
          <img src="{{asset('image/home.png')}}" alt=""  width="20"
          style="vertical-align:middle; margin-top:-5px;
          ">
          Menu</button>
        </a>
      </div>
      <span>Ceremony PalComTech</span>
      <div class="logo">
        <img src="{{asset('image/logo.png')}}" alt="" width="170">
      </div>
    </div>
    <div class="tengah">

      <div class="card">
            <a href="/siswaterbaiksdrm1" style="text-decoration:none ">
              <img src="{{asset('image/mortarboard.png')}}" alt=""  width="40"
              style="
              ">
              Siswa Terbaik 1
                <br>
            <div class="" style="font-weight: normal;
            ">
            </div>
            </a>
      </div>
      <div class="card">
            <a href="/siswaterbaiksdrm2" style="text-decoration:none ">
              <img src="{{asset('image/mortarboard.png')}}" alt=""  width="40"
              style="
              ">
              Siswa Terbaik 2
                <br>
            <div class="" style="font-weight: normal;
            ">
            </div>
            </a>
      </div>
      <div class="card">
            <a href="/siswaterbaiksdrm3" style="text-decoration:none ">
              <img src="{{asset('image/mortarboard.png')}}" alt=""  width="40"
              style="
              ">
              Siswa Terbaik 3
                <br>
            <div class="" style="font-weight: normal;
            ">
            </div>
            </a>
      </div>
    </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

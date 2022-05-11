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
    background-color: #B3E5FC
}
.card {
    border: none;
    border-radius: 20px;
    transition: all 0.5s;
    cursor: pointer
}

.card:hover {
    transform: scale(1.1)
}

.heading {
    font-size: 32px;
    font-weight: bold;
    text-align: center
}

.name {
    font-size: 15px;
    font-weight: bold
}

.square {
    background-color: #fedcdd;
    height: 30px;
    width: 30px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center
}

.email {
    font-size: 14px;
    margin-left: 25px;
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
    height: 30px;
    width: 30px;
    border-radius: 8px;
    display: flex;
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
    display: flex;
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
  <div class="container mt-3 mb-3">
    <div class="d-flex flex-row align-items-center"></div>
    <div class="heading mt-2"> <span>Siswa dan Siswi Angkatan 18 - 21<br>PalComTech Opi Mall</span> </div>
    <div class="row mt-1 g-4">
        <div class="col-md-4">
            <a href="#" style="text-decoration:none">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square"><img src="{{asset('icon/pct.png')}}" height="20" width="20" /></span> </div>
                <div class="email mt-1"> <span>Email Marketing</span>
                    <div class="dummytext mt-1"> <span>Lorem Ipsum is simply dummy text of the <br>printing and typesetting industry.</span> </div>
                </div>
                <div class="d-flex flex row align-items-center mr-2 mt-2">
                    <div class="icons"> <i class="fa fa-check-circle"></i> <span>Email Newsletter setup</span> </div>
                    <div class="icons"> <i class="fa fa-check-circle"></i> <span>Email Sequence</span> </div>
                    <div class="icons"> <i class="fa fa-check-circle"></i> <span>Email Monitization</span> </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
        <a href="#" style="text-decoration:none">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square1"><img src="{{asset('icon/pct.png')}}" height="20" width="20" /></span> </div>
                <div class="email mt-1"> <span>Paid Advertising</span>
                    <div class="dummytext mt-1"> <span>Lorem Ipsum is simply dummy text of the <br>printing and typesetting industry.</span> </div>
                </div>
                <div class="d-flex flex row align-items-center mr-2 mt-2">
                    <div class="icons1"> <i class="fa fa-check-circle"></i> <span>Google Ads</span> </div>
                    <div class="icons1"> <i class="fa fa-check-circle"></i> <span>Facebook Ads</span> </div>
                    <div class="icons1"> <i class="fa fa-check-circle"></i> <span>Linkedin & Twitter Ads</span> </div>
                </div>
            </div>
        </a>
        </div>
        <div class="col-md-4">
        <a href="#" style="text-decoration:none">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square2"><img src=" {{asset('icon/pct.png')}}" height="20" width="20" /></span> </div>
                <div class="email mt-1"> <span>SEO</span>
                    <div class="dummytext mt-1"> <span>Lorem Ipsum is simply dummy text of the <br>printing and typesetting industry.</span> </div>
                </div>
                <div class="d-flex flex row align-items-center mr-2 mt-2">
                    <div class="icons2"> <i class="fa fa-check-circle"></i> <span>SEO audits</span> </div>
                    <div class="icons2"> <i class="fa fa-check-circle"></i> <span>On-Page audits</span> </div>
                    <div class="icons2"> <i class="fa fa-check-circle"></i> <span>Off-Page audits</span> </div>
                </div>
            </div>
            </a>    
        </div>
        <div class="col-md-4">
        <a href="#" style="text-decoration:none">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square3"><img src="{{asset('icon/pct.png')}}" height="20" width="20" /></span> </div>
                <div class="email mt-1"> <span>Content Marketing</span>
                    <div class="dummytext mt-1"> <span>Lorem Ipsum is simply dummy text of the <br>printing and typesetting industry.</span> </div>
                </div>
                <div class="d-flex flex row align-items-center mr-2 mt-2">
                    <div class="icons3"> <i class="fa fa-check-circle"></i> <span>Article & Written Content</span> </div>
                    <div class="icons3"> <i class="fa fa-check-circle"></i> <span>Video Content</span> </div>
                    <div class="icons3"> <i class="fa fa-check-circle"></i> <span>Infographics</span> </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
        <a href="#" style="text-decoration:none">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square4"><img src="{{asset('icon/pct.png')}}" height="20" width="20" /></span> </div>
                <div class="email mt-1"> <span>Funnel Optimization</span>
                    <div class="dummytext mt-1"> <span>Lorem Ipsum is simply dummy text of the <br>printing and typesetting industry.</span> </div>
                </div>
                <div class="d-flex flex row align-items-center mr-2 mt-2">
                    <div class="icons4"> <i class="fa fa-check-circle"></i> <span>Analytical Analysis</span> </div>
                    <div class="icons4"> <i class="fa fa-check-circle"></i> <span>A/B Testing</span> </div>
                    <div class="icons4"> <i class="fa fa-check-circle"></i> <span>Conversion Optimization</span> </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
        <a href="#" style="text-decoration:none">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square5"><img src="{{asset('icon/pct.png')}}" height="20" width="20" /></span> </div>
                <div class="email mt-1"> <span>Social Media</span>
                    <div class="dummytext mt-1"> <span>Lorem Ipsum is simply dummy text of the <br>printing and typesetting industry.</span> </div>
                </div>
                <div class="d-flex flex row align-items-center mr-2 mt-2">
                    <div class="icons5"> <i class="fa fa-check-circle"></i> <span>Content Creation</span> </div>
                    <div class="icons5"> <i class="fa fa-check-circle"></i> <span>Community Management</span> </div>
                    <div class="icons5"> <i class="fa fa-check-circle"></i> <span>Social Media Growth</span> </div>
                </div>
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
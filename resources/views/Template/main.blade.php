<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bsadmin.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style media="screen">
    img.card-img-top {
        width: 238px;
        height: 210px;
        object-position: 2px 2% 2px;
        object-fit: cover;
        }
    </style>
    <title>@yield('judul')</title>
  </head>
  <body>

    <nav class="navbar navbar-expand navbar-dark" style="
    background: linear-gradient(0deg, rgba(58,157,224,1) 0%, rgba(6,98,165,1) 50%);
    ">
        <a class="sidebar-toggle text-light mr-3"><i class="fa fa-bars"></i></a>

        <a class="navbar-brand" href="/rumah"><i class=""> <span class="square"><img src="{{asset('icon/pct.png')}}" height="30" width="30" /></span></i> PalComTech </a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <i class="fa fa-user"></i> Admin
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Pengaturan</a>
                        <a class="dropdown-item" href="/home">Keluar</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="d-flex">
        <nav class="sidebar bg-dark">
            <ul class="list-unstyled">
                <li><a href="/rumah"><i class="fa fa-fw fa-home"></i> Dashboard </a></li>
                <li>
                    <a href="#submenu1" data-toggle="collapse"><i class="fa fa-fw fa-cog"></i> Input Data</a>
                    <ul id="submenu1" class="list-unstyled collapse">
                        <li><a href="/tambahopi">PalComTech Opi Mall</a></li>
                        <li><a href="/tambahsudirman">PalComTech Sudirman</a></li>

                    </ul>
                </li>

                <li>
                    <a href="#submenu2" data-toggle="collapse"><i class="fa fa-fw fa-bars"></i> Lihat Siswa</a>
                    <ul id="submenu2" class="list-unstyled collapse">
                        <li><a href="/lihat">PalComTech Opi Mall</a></li>
                        <li><a href="/lihatsudirman">PalComTech Sudirman</a></li>

                    </ul>
                </li>
                <li><a href="/index"><i class="fa fa-fw fa-user"></i> Beranda</a></li>
        </nav>

        <div class="modal fade" id="modalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="modalMdTitle"></h4>
                  </div>
                  <div class="modal-body">
                      <div class="modalError"></div>
                      <div id="modalMdContent"></div>
                  </div>
              </div>
          </div>
        </div>

        <div class="content p-4">
            @yield('content p-4')
            </div>
    </div>

        <script type="text/javascript">
        $(document).on('ajaxComplete ready', function () {
          $('.modalMd').off('click').on('click', function () {
              $('#modalMdContent').load($(this).attr('value'));
              $('#modalMdTitle').html($(this).attr('title'));
          });
        });
        </script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bsadmin.js')}}"></script>
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

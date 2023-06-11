<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>home</title>
    <link href="{{asset('frontend/login.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"  />
</head>
  <body>
    <!-- navbar-->
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Kalibrasi</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="offcanvas offcanvas-end text-bg-light"
            tabindex="-1"
            id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasLightkNavbarLabel">
                Kalibrasi Alat Pengukuran Kecepatan Angin
              </h5>
              <button
                type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Alat Standar</a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Profil
                  </a>
                  <ul class="dropdown-menu dropdown-menu-light">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="#">History</a></li>
                  </ul>
               </form>
            </div>
          </div>
        </div>
      </nav>

    <!-- conten-->
    <div class="container py-5">
        <div class="container-fluid py-5 text-bg-green rounded-3">
          <h1 class="display-5 fw-bold text-center">BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA</h1>
          <p class="display-6 text-center">Web Kalibrasi Alat Pengukuran Kecepatan Angin</p>
       </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- /.col-md-3 -->
            <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                <div class="p-3 text-center bg-body-tertiary border  rounded-3"style="height: 13rem;">
                  <img src="{{asset('frontend/asset/anemometer.png')}}" class="mb-2" alt="anemometer">
                  <div class="align-bottom">    
                    <button type="fitur" class="btn btn-md btn-outline-secondary" href="#">Kalibrasi</button>
                  </div>
                </div>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                <div class="p-3 text-center bg-body-tertiary border  rounded-3" style="height: 13rem;">
                  <img src="{{asset('frontend/asset/leader.png')}}" class="mb-2" alt="profil">
                        <div class="align-bottom">
                          <button type="fitur" class="btn btn-md btn-outline-secondary" href="#"
                          >User</button>
                    </div>
                </div>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                <div class="p-3 text-center bg-body-tertiary border rounded-3"style="height: 13rem;">
                  <img src="{{asset('frontend/asset/settings.png')}}" class="mb-2" alt="standar">
                  <div class="align-bottom">
                    <button type="fitur" class="btn btn-md btn-outline-secondary" href="#">Alat Standar</button>
                  </div>
                </div>
        </div>
        <!-- /.row -->
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html
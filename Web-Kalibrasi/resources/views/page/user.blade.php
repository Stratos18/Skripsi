<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>user-profil</title>
    <link href="login.css" rel="stylesheet" />
    <link href="{{asset('frontend/login.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"  />
</head>
  <body>
    <!-- navbar-->
   @include('navbar')
    <!--conten-->
    <div class="container" style="margin-top: 60px;">
        <div class="container-fluid py-3 text-bg-green rounded-3 mb-3" >
            <h1 class="display-5 fw-bold text-center" style="margin-top: 25px;">BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA</h1>
            <h4 class="text-center" >LABORATORIUM KALIBRASI</h4>
        </div>
        <div class="container-fluid">
            <div class="d-flex justify-content-center">
                <div class="card mb-3" style="max-width: 500px;">
                    <div class="row g-2 align-items-center">
                        <div class="col-md-4 p-4">
                            <img class="img-fluid rounded-2" width="200" height="200" src="/home/bagus/Documents/to skripsi/forntendkalibrasi/pages/asset/husband.gif" alt="profilimage"></img>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">Name</h5>
                                <h4 class="card-text">NIP</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-center border-bottom border-3"> Riwayat Kalibrasi</h2>
        </div>

    @include('footer')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
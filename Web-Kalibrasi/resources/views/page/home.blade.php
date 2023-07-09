<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>home</title>
    <link href="{{asset('frontend/login.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"  />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
</head>
  <body>
    <!-- navbar-->
  <div class="continer border">
   @include('navbarv2')

    <!-- conten-->
    <div class="container-fluid p-4">
        <div class="container-fluid py-5 text-bg-green rounded-3">
          <h1 class="display-5 fw-bold text-center">BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA</h1>
          <p class="display-6 text-center">Web Kalibrasi Alat Pengukuran Kecepatan Angin</p>
       </div>
    </div>
    <div class="container">
        <div class="row">
          <!-- /.col-md-3 -->
          <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
            <div class="p-3 text-center bg-body-tertiary border rounded-3"style="height: 13rem;">
              <img src="{{asset('frontend/asset/settings.png')}}" class="mb-2" alt="standar">
              <div class="align-bottom">
                <button type="fitur" class="btn btn-md btn-outline-secondary" href="#">
                  <a class="link-body-emphasis link-underline-opacity-0"href="{{ route('alatstd')}}">Alat Standar</a>
                </button>
              </div>
            </div>
        </div>
            <!-- /.col-md-3 -->
            <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                <div class="p-3 text-center bg-body-tertiary border  rounded-3"style="height: 13rem;">
                  <img src="{{asset('frontend/asset/anemometer.png')}}" class="mb-2" alt="anemometer">
                  <div class="align-bottom">    
                    <button type="fitur" class="btn btn-md btn-outline-secondary">
                      <a class="link-body-emphasis link-underline-opacity-0"href="{{ route('pkalibrasi')}}">Kalibrasi</a>
                    </button>
                  </div>
                </div>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-4 col-sm-4 col-xs-12 mb-3">
                <div class="p-3 text-center bg-body-tertiary border  rounded-3" style="height: 13rem;">
                  <img src="{{asset('frontend/asset/leader.png')}}" class="mb-2" alt="profil">
                        <div class="align-bottom">
                          <button type="fitur" class="btn btn-md btn-outline-secondary">
                            <a class="link-body-emphasis link-underline-opacity-0"href="{{ route('profil')}}">Profile</a>
                          </button>
                    </div>
                </div>
            </div>
            
        <!-- /.row -->
        @include('footer')
        </div>
    </div>  
 
  </body>
</html
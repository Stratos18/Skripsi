<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sertifikat</title>
    <link href="{{asset('frontend/login.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"  />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
    <div class="container-fluid" style="margin-top: 50px">
        <div class="row justify-conten-center mb-3">
            <div class="col-3">
                <img src="{{asset('frontend/asset/Logo-BMKG.png')}}" height="124" class="mx-auto d-block">
            </div>
            <div class="col-6 text-center">
                <h5 > BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA</h5>
                <h2 class="fw-bold"> LABORATORIUM KALIBRASI BMKG</h2>
            </div>
            <div class="col-3">
                <img src="{{asset('frontend/asset/KAN.png')}}" height="124" class="mx-auto d-block">
            </div>
        </div>
        <div class="row border-bottom border-5 border-dark mb-2"></div>
        <div class="row border-bottom border-3 border-dark mb-4"></div>
        <div class="continer">
            <form action="#">
            <div class=" text-center">
                <h2 class="fw-bold">SERTIFIKAT KALIBRASI</h2>
                <p class="fst-italic"> CALIBRASTION CERTIFICATE</p>
                <div class="row justify-content-center mb-5">
                    <div class="col-auto">
                        <label for="no_sertif" class="col-form-label fw-bold">No. : </label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="no_sertifuut" class="form-control" name="no_sertifuut">
                    </div>
                </div>
            </div>
            <!--form identitas-->
            <div class="container">
                <h4 class="mb-1"><u>IDENTITAS ALAT</u></h4>
                <small class="fst-italic">Instrument Details</small>
                <div style="margin-left: 2cm">
                    <div class="mb-1 row">
                        <label class="col-sm-2 col-form-label">Nama Alat
                            <br><i> Instrument Name</i></label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label class="col-sm-2 col-form-label">Nama Alat
                            <br><i> Instrument Name</i></label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label class="col-sm-2 col-form-label">Nama Alat
                            <br><i> Instrument Name</i></label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label class="col-sm-2 col-form-label">Nama Alat
                            <br><i> Instrument Name</i></label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                </div>
            </div>
             <!-- form pemilik-->
            <div class="container">
                <h4 class="mb-1"><u>IDENTITAS PEMILIK</u></h4>
                <small class="fst-italic">Owner Identification</small>
                <div style="margin-left: 2cm">
                    <div class="mb-1 row">
                        <label class="col-sm-2 col-form-label">Nama
                            <br><i> Designation</i></label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label class="col-sm-2 col-form-label">Alamat
                            <br><i> address</i></label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</body>
</html>